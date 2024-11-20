$(document).ready(function() {
        $('#empTable').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'ajax': {
                'url':'./controllers/productList_paginets_ajax.php'
            },
            'columns': [
                { data: 'name' },
                { data: 'description' },
                { data: 'price' }
            ]
        });
    });
