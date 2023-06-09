<?php

return [
    'common' => [
        'actions' => 'Actions',
        'create' => 'Create',
        'edit' => 'Edit',
        'update' => 'Update',
        'new' => 'New',
        'cancel' => 'Cancel',
        'attach' => 'Attach',
        'detach' => 'Detach',
        'save' => 'Save',
        'delete' => 'Delete',
        'delete_selected' => 'Delete selected',
        'search' => 'Search...',
        'back' => 'Back to Index',
        'are_you_sure' => 'Are you sure?',
        'no_items_found' => 'No items found',
        'created' => 'Successfully created',
        'saved' => 'Saved successfully',
        'removed' => 'Successfully removed',
    ],

    'users' => [
        'name' => 'Users',
        'index_title' => 'Users List',
        'new_title' => 'New User',
        'create_title' => 'Create User',
        'edit_title' => 'Edit User',
        'show_title' => 'Show User',
        'inputs' => [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ],
    ],

    'mrp_posts' => [
        'name' => 'Mrp Posts',
        'index_title' => 'MrpPosts List',
        'new_title' => 'New Mrp post',
        'create_title' => 'Create MrpPost',
        'edit_title' => 'Edit MrpPost',
        'show_title' => 'Show MrpPost',
        'inputs' => [
            'user_id' => 'User',
            'part_plan' => 'Part Plan',
            'part_descr' => 'Part Descr',
            'manuf' => 'Manuf',
            'manuf_part_no' => 'Manuf Part No',
            'comm_group' => 'Comm Group',
            'mrp_pr_no' => 'Mrp Pr No',
            'qty_mrp_plan_o' => 'Qty Mrp Plan O',
            'qty_mrp_on_hand' => 'Qty Mrp On Hand',
            'qty_available' => 'Qty Available',
            'qty_safety_stock' => 'Qty Safety Stock',
            'qty_wo_demmand' => 'Qty Wo Demmand',
            'qty_multiple_lot_size' => 'Qty Multiple Lot Size',
            'wo_no' => 'Wo No',
            'qty_pr_supply' => 'Qty Pr Supply',
            'pr_supply_no' => 'Pr Supply No',
            'qty_po_supply' => 'Qty Po Supply',
            'po_supply_no' => 'Po Supply No',
            'qty_arrived_po' => 'Qty Arrived Po',
            'arrived_po_supply_no' => 'Arrived Po Supply No',
            'uom' => 'Uom',
            'buyer_group' => 'Buyer Group',
            'remarks' => 'Remarks',
            'budget' => 'Budget',
            'persetujuan_id' => 'Persetujuan',
        ],
    ],

    'persetujuans' => [
        'name' => 'Persetujuans',
        'index_title' => 'Persetujuans List',
        'new_title' => 'New Persetujuan',
        'create_title' => 'Create Persetujuan',
        'edit_title' => 'Edit Persetujuan',
        'show_title' => 'Show Persetujuan',
        'inputs' => [
            'user_id' => 'User',
            'setuju' => 'Setuju',
            'tidak' => 'Tidak',
        ],
    ],

    'roles' => [
        'name' => 'Roles',
        'index_title' => 'Roles List',
        'create_title' => 'Create Role',
        'edit_title' => 'Edit Role',
        'show_title' => 'Show Role',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'permissions' => [
        'name' => 'Permissions',
        'index_title' => 'Permissions List',
        'create_title' => 'Create Permission',
        'edit_title' => 'Edit Permission',
        'show_title' => 'Show Permission',
        'inputs' => [
            'name' => 'Name',
        ],
    ],
];
