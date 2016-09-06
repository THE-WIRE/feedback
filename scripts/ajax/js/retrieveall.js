/**
 * Created by itssu on 04-Sep-16.
 */

$('document').ready(function(){

    $('#department').DataTable({

        ajax: 'scripts/ajax/retrievealldept.php',
        columns: [
            {data: 'dep_id'},
            {data: 'dep_name'}
        ]

    });

    $('#college').DataTable({

        ajax: 'scripts/ajax/retrieveallcol.php',
        columns: [
            {data: 'colg_id'},
            {data: 'colg_name'}
        ]

    });

    $('#subject').DataTable({

        ajax: 'scripts/ajax/retrieveallsub.php',
        columns: [
            {data: 'sub_id'},
            {data: 'sub_name'},
            {data: 'dep_id'},
            {data: 'sem'}
        ]

    });

    $('#professor').DataTable({

        ajax: 'scripts/ajax/retrieveallpro.php',
        columns: [
            {data: 'prof_id'},
            {data: 'prof_name'}
        ]

    });
});