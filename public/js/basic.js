$(document).ready(function () {
    // ----------------------------Control for Faculty

    $('body').on('click','.btn-edit-faculty',function () {
        let modal = $('#editFaculty');
        let url = $(this).data('url');
        let code = $(this).closest('tr').find('.code').text();
        let name = $(this).closest('tr').find('.name').text();
        modal.find('#form-edit-faculty').attr('action', url);
        modal.find('input[name=code]').val(code);
        modal.find('input[name=name]').val(name);

    });

    $('body').on('click','.btn-delete-faculty', function () {
        let table = $('.table-faculty');
        let modal = $('#modal-del-fac');
        let id = $(this).data('id');
        let url = $(this).data('url');
        let name = $(this).data('name');

        let tr = table.find('.tr-major-',id);

        modal.find('div .modal-footer a').attr('href',url);
        modal.find('div .modal-body b').text(name);
        console.log(name);

    });
    $('body').on('submit','#form-edit-faculty',function () {
        let modal = $('#editFaculty');
        let form = modal.find('#form-edit-faculty');
        let table = $('.table-faculty');

        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function (res) {
                var tr = table.find('.tr-fac-'+res.id);
                tr.find('.code').text(res.code);
                tr.find('.name').text(res.name);
//refresh the button after updating data and modal as well
                tr.find('button').data('code',res.code);
                tr.find('button').data('code',res.name);
                modal.modal('hide');
                modal.find('input[name=code]').val(res.code);
                modal.find('input[name=name]').val(res.name);


            },error: function (err) {
                console.log(err);
            }
        });
        return false;
    })




    //--------------------------------------------------Control for Setting model
    $('body').on('click','.btn-edit-setting', function () {
       var modal = $('#edit-seting');
       var url = $(this).data('url');
       var _key = $(this).data('_key');
       var val = $(this).data('val');
       var des = $(this).data('des');

       modal.find('#form-edit').attr('action', url);
       modal.find('input[name=_key]').val(_key);
       modal.find('input[name=value]').val(val);
       modal.find('textarea').val(des);

       modal.modal('show');

    });
    $('#form-edit').submit(function () {
        var modal = $('#edit-seting');
        var form = modal.find('#form-edit');
        var table = $('#tabl-setting');

        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function (res) {
                var tr = table.find('.tr-setting-' + res.id);

                tr.find('._key').text(res._key);
                tr.find('.val').text(res.val);
                tr.find('.des').text(res.des);
                // tr.find('.btn-edit-setting').data('')


                tr.find('button').data('_key',res._key);
                tr.find('button').data('val',res.val);
                tr.find('button').data('des',res.des);

                modal.modal('hide');
                modal.find('input[name=_key]').val(res._key);
                modal.find('input[name=value]').val(res.val);

                modal.find('textarea').val(res.des);
            },error: function (err) {
                console.log(err);
            }
        });
        return false;

    });


    //-----------------------------Control for Lecturer model
    $('body').on('click','.btn-delete-lecturer', function () {
        let table = $('.table-lecturer');
        let modal = $('#modal-del-lec');
        let id = $(this).data('id');
        let url = $(this).data('url');
        let name = $(this).data('name');
        let tr = table.find('.tr-lecturer-',id);

        modal.find('div .modal-footer a').attr('href',url);
        modal.find('div .modal-body b').text(name);

        modal.modal('show');
    });


    // ----------------------------Control for Majors
    $('body').on('click', '#btn-edit-major', function () {
        var modal = $('#modalEditMajor');
        var url = $(this).data('url');
        var code = $(this).data('code');
        var name = $(this).data('name');

        modal.find('form').attr('action', url);
        modal.find('input[name=code]').val(code);
        modal.find('input[name=name]').val(name);

        modal.modal('show');
    });
    $('#form-edit-major').submit(function() {
        let modal = $('#modalEditMajor');
        let table = $('.table-major');
        let form = $('.form-edit-major');

        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function (res) {
                console.log(res);
                var tr = table.find('.tr-major-' + res.id);

                tr.find('.td-major-code').text(res.code);
                tr.find('.td-major-name').text(res.name);

                tr.find('button').data('code',res.code);
                tr.find('button').data('name',res.name);

                modal.modal('hide');
                modal.find('input[name=code]').val(res.code);
                modal.find('input[name=name]').val(res.name);
            },
            error: function(err){
                console.log(err)
            }
        });
        return false;
    })
    $('body').on('click','.btn-delete-major', function () {
        let table = $('.table-major');
        let modal = $('#modal-del-major');
        let id = $(this).data('id');
        let url = $(this).data('url');
        let name = $(this).data('name');
        let tr = table.find('.tr-major-',id);

        modal.find('div .modal-footer a').attr('href',url);
        modal.find('div .modal-body b').text(name);
        console.log(name);

    });



    //----------------------------Control for subjects
    $('body').on('click','.btn-edit-subject', function () {
        let modal = $('#modal-edit-subject');
        let url = $(this).data('url');
        let code = $(this).data('code');
        let name = $(this).data('name');
        let faculty_id = $(this).data('faculty-id');

        modal.find('form').attr('action',url);
        modal.find('input[name=code]').val(code);
        modal.find('input[name=name]').val(name);
        modal.find('.faculty_id').val(faculty_id);

        modal.modal('show');
    });
    $(' body').on('submit','#form-edit-subject',function () {
        let modal = $('#modal-edit-subject');
        let table = $('.table-subject');
        let form = $('#form-edit-subject');

        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function (res) {
                var tr = table.find('.tr-subject-'+res.id);

                tr.find('.td-code').text(res.code);
                tr.find('.td-name').text(res.name);

                tr.find('button.btn-edit-subject').data('code',res.code);
                tr.find('button.btn-edit-subject').data('subjectname',res.name);

                modal.modal('hide');
                modal.find('input[name=code]').val(res.code);
                modal.find('input[name=subjectname]').val(res.name);
            },
            error: function (err) {
                console.log(err);
            }
        });
        return false;
    });

    $('#form-edit-subject').submit(function () {

    });

    $('body').on('click','.btn-delete-subject', function () {
        let table = $('.table-subject');
        let modal = $('#modal-del-subject');
        let id = $(this).data('id');
        let url = $(this).data('url');
        let name = $(this).data('subjectname');
        modal.modal('show');

        let tr = table.find('.tr-subject-',id);
        modal.find('div .modal-footer a').attr('href',url);
        modal.find('div .modal-body b').text(name);

    });
    /*$('table tbody tr td ').on('click','button.btn-danger',function(){
        $('#delete-modal').modal('show');
        let url = $(this).data('url');
        let del_modal = $('a.modal-accept').attr('href',url);
    });*/








                    // ----------------------- Side-bar click get table
    $('ul.treeview-menu').on('click','.sidebar-majors',function () {
        $.ajax({
            url: '/majors/loadList',
            type: 'GET',
            success: function (response) {
                $('div #loading-ajax ').html(response.html);
            }
        })
        return false;
    })
    $('ul .treeview-menu').on('click','.sidebar-faculties',function () {
        $.ajax({
            url: '/faculties/loadList',
            type: 'GET',
            success: function (response) {
                $('div #loading-ajax ').html(response.html);
            }
        });
    })
    $('ul .treeview-menu').on('click','.sidebar-students',function () {
        $.ajax({
            url: '/students/loadList',
            type: 'GET',
            success: function (response) {
                $('div #loading-ajax ').html(response.html);
            }
        });
    })
})