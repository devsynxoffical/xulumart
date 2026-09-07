<?php

namespace App\Http\Controllers;

use App\Models\StoreMenu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StoreMenuController extends Controller
{
    /**
     * Admin list page - resources/views/admin/store-menu/index.blade.php
     */
    public function index()
    {
        // Only top-level entries here; each one loads its own children via
        // the `child` relationship in the view. Ordered so the admin list
        // and the public Menu page always show items in the same order.
        $menus = StoreMenu::where('parent_id', 0)->orderBy('position')->get();

        // For the "Parent" dropdown when adding/editing an item.
        $parentOptions = StoreMenu::where('parent_id', 0)->orderBy('position')->get();

        return view('admin.store-menu.index', compact('menus', 'parentOptions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'parent_id' => 'nullable|integer',
            'description' => 'nullable|string',
        ]);

        $menu = new StoreMenu();
        $menu->title = $request->title;
        $menu->parent_id = $request->parent_id ?: 0;
        $menu->description = $request->description;
        $menu->is_active = $request->has('is_active') ? 1 : 0;

        // Auto-increment position within its own group (top-level, or
        // within the same parent) so new items land at the end by default.
        $menu->position = StoreMenu::where('parent_id', $menu->parent_id)->max('position') + 1;

        $menu->save();

        Alert::toast('Menu item added', 'success');
        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'parent_id' => 'nullable|integer',
            'description' => 'nullable|string',
        ]);

        $menu = StoreMenu::find($id);
        if (!$menu) {
            Alert::toast('Menu item not found', 'error');
            return back();
        }

        // A menu item can never become its own parent - avoids an
        // impossible/broken loop in the tree.
        $newParentId = $request->parent_id ?: 0;
        if ((int) $newParentId === (int) $menu->id) {
            Alert::toast('A menu item cannot be its own parent.', 'error');
            return back();
        }

        $menu->title = $request->title;
        $menu->parent_id = $newParentId;
        $menu->description = $request->description;
        $menu->is_active = $request->has('is_active') ? 1 : 0;
        $menu->save();

        Alert::toast('Menu item updated', 'success');
        return back();
    }

    public function destroy(Request $request, $id)
    {
        $menu = StoreMenu::find($id);
        if (!$menu) {
            Alert::toast('Menu item not found', 'error');
            return back();
        }

        // Deleting a parent also deletes its own sub-items, so the public
        // page never ends up with orphaned children pointing at a parent
        // that no longer exists.
        StoreMenu::where('parent_id', $menu->id)->delete();
        $menu->delete();

        Alert::toast('Menu item deleted', 'success');
        return back();
    }
}
