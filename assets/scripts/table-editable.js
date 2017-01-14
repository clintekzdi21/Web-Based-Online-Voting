var GLOBAL ;
$("tr.table").click(function() {
    var tableData = $(this).children("td").map(function() {
        return $(this).text();
    }).get();
    console.log($.trim(tableData[5]));

    GLOBAL = $.trim(tableData[5]);
    console.log(GLOBAL);
});

var TableEditable = function () {

    return {

        //main function to initiate the module
        init: function () {
            function restoreRow(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);

                for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                    oTable.fnUpdate(aData[i], nRow, i, false);
                }

                oTable.fnDraw();
            }

            function editRow(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);
                jqTds[0].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[0] + '">';
                jqTds[1].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[1] + '">';
                jqTds[2].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[2] + '">';
                jqTds[3].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[3] + '">';
                jqTds[4].innerHTML = '<a class="upParty" href="">Save</a>';
                jqTds[5].innerHTML = '<a class="cancel" href="">Cancel</a>';
            }

            function editRow1(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);
                //$("#xy").val(jqTds[0].innerHTML);
                jqTds[0].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[0] + '">';
                jqTds[1].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[1] + '">';
                jqTds[2].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[2] + '">';
                jqTds[3].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[3] + '">';
                jqTds[4].innerHTML = '<a class="editt" href="">Save</a>';
                jqTds[5].innerHTML = '<a class="cancel" href="">Cancel</a>';
            }

            function editRow2(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);
                //$("#xy").val(jqTds[0].innerHTML);
                jqTds[0].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[0] + '">';
                jqTds[1].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[1] + '">';
                jqTds[2].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[2] + '">';
                jqTds[3].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[3] + '">';
                jqTds[4].innerHTML = '<a class="upPosition" href="">Save</a>';
                jqTds[5].innerHTML = '<a class="cancel" href="">Cancel</a>';
            }

            function reg_Stud(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
               // $("#movefazter").click();
                $("#dhan").click();
                $("#sd_id").val(aData[3])
                $("#fullname").val(aData[1]);
                $("#course").val(aData[2]);

            }

            function generate_pass(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                $("#genPass").click();
                 $("#stud_id").val(aData[1])
            }

            function print_pass(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                $("#prinpass").click();
                 // $("#stud_id").val(aData[1])
            }

            function set_election(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                $("#cs").click();
                $("#de_id").val(aData[2]);
                 $("#St").val(aData[1]);
                // $("#course").val(aData[2]);

            }

            function set_election1(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                $("#cs").click();
                $("#de_id").val(aData[2]);
                $("#St").val(aData[1]);
                $("#stop").show();
                $("#start").hide();
                $("#setstop").show();
                $("#setstart").hide();
            }

             function up_candidate(oTable, nRow) {
                console.log('Hello');
                var aData = oTable.fnGetData(nRow);
                $("#dhan").click();
                $("#cn1").show();
                $("#cn").hide();
                $("#upcan").show();
                $("#addcan").hide();
                $("#sd_id").val(aData[5])
                $("#fullname").val(aData[0]);
                $("#course").val(aData[1]);
                $("#cd").val(aData[4]);
                $("#cd_id").val(aData[6]);
                $("#blah").hide();
                $('#previewing').empty();

                $.ajax({
                    url: 'http://localhost/Web Based Online Voting/loadimage.php',
                    async: false,
                    type: 'POST',
                    crossDomain: true,
                    dataType: 'json',
                    data: {
                        ID: GLOBAL
                    },
                    success: function(response) {
                        var decode = response;
                         var photo;
                         console.log(decode);
                        if(decode.image[0].c_image == ''){
                                photo = '../votersfolder/img/photo.jpg'
                            }else{
                                photo = 'data:image/jpg;base64,' + decode.image[0].c_image;
                            }
                            console.log(photo);
                        var html = '<img id="blah" src="'+photo+'" />'

                        console.log(html);

                        $('#previewing').append(html);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

            }


            function Up_Course(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                $("#Arnie").click();
                $("#c2").show();
                $("#c1").hide();
                $("#upC").show();
                $("#addC").hide();
                $("#Coname").val(aData[0]);
                $("#Colname").val(aData[2]);

            }

            function Up_Account(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                $("#UpAccount").click();
                $("#aid").val(aData[2]);
                $("#pad").val(aData[3]);
                $("#on").val(aData[0]);
                $("#un").val(aData[1]);
              

            }

             function Up_Student(oTable, nRow) 
             {
                var aData = oTable.fnGetData(nRow);
                $("#upStudent").click();
                $("#s1").hide();
                $("#s2").show();
                $("#addS").show();
                $("#upS").hide();
                $("#sdid").val(aData[5]);
                $("#sid").val(aData[0]);
                $("#sname").val(aData[1]);
                $("#acad").val(aData[4]);
             }
            
            function saveRow(oTable, nRow) {
                var jqInputs = $('input', nRow);
                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                oTable.fnUpdate('<a class="upParty" href="">Edit</a>', nRow, 4, false);
                oTable.fnUpdate('<a class="delete" href=""></a>', nRow, 5, false);
                oTable.fnDraw();
                var partyname=jqInputs[0].value;
                var partyid=jqInputs[1].value;
                 $.ajax({
                        type:"POST",
                        url:"UPDATE.php",
                        cache : "false",
                        async:"false",
                        data: {
                                actionjs:'updateparty',
                                parname: partyname,
                                pid: partyid},
                        success:function(data){
                            alert('Updated Successfully!');
                           
                        }
       });
            }

            function saveRow1(oTable, nRow) {
                var jqInputs = $('input', nRow);
                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                oTable.fnUpdate('<a class="editt" href="">Edit</a>', nRow, 4, false);
                oTable.fnUpdate('<a class="delete" href=""></a>', nRow, 5, false);
                oTable.fnDraw();
                var collegename=jqInputs[0].value;
                var collegeid=jqInputs[1].value;
                 $.ajax({
                        type:"POST",
                        url:"UPDATE.php",
                        cache : "false",
                        async:"false",
                        data: {
                                actionjs:'updatecollege',
                                colname: collegename,
                                cid: collegeid},
                        success:function(data){
                            alert('Updated Successfully');
                           
                        }
       });
            }

            function saveRow2(oTable, nRow) {
                var jqInputs = $('input', nRow);
                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                oTable.fnUpdate('<a class="upPosition" href="">Edit</a>', nRow, 4, false);
                oTable.fnUpdate('<a class="delete" href=""></a>', nRow, 5, false);
                oTable.fnDraw();
                var poid=jqInputs[2].value;
                var poname=jqInputs[0].value;
                var maxwin=jqInputs[1].value;
               
                 $.ajax({
                        type:"POST",
                        url:"UPDATE.php",
                        cache : "false",
                        async:"false",
                        data: {
                                actionjs:'updateposition',
                                posId: poid,
                                posName: poname,
                                maxw:maxwin},
                        success:function(data){
                            alert('Updated Successfully!');
                           
                        }
       });
            }


            function cancelEditRow(oTable, nRow) {
                var jqInputs = $('input', nRow);
                oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 4, false);
                oTable.fnDraw();
            }
            
            var oTable = $('#sample_editable_1').dataTable({
                "aLengthMenu": [
                    [5, 20, 30, 40, -1],
                    [5, 20, 30, 40, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 5,
                
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ records",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                },
                "aoColumnDefs": [{
                        'bSortable': false,
                        'aTargets': [0]
                    }
                ]
            });
            jQuery('#sample_editable_1_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
            jQuery('#sample_editable_1_wrapper .dataTables_filter input').addClass("form-control input-medium"); // modify table search input
            jQuery('#sample_editable_1_wrapper .dataTables_length select').select2({
                showSearchInput : false //hide search box with special css class
            }); // initialize select2 dropdown

            var nEditing = null;

            $('#sample_editable_1_new').click(function (e) {
                e.preventDefault();
                var aiNew = oTable.fnAddData(['', '', '', '',
                        '<a class="edit" href="">Edit</a>', '<a class="cancel" data-mode="new" href="">Cancel</a>'
                ]);
                var nRow = oTable.fnGetNodes(aiNew[0]);
                editRow(oTable, nRow);
                nEditing = nRow;
            });
            $('.list-group-item').click(function (e) {
                e.preventDefault();
                alert("hohhoh");
            });



             $('#sample_editable_1 a.delete').live('click', function (e) {
                e.preventDefault();

                if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }

                var nRow = $(this).parents('tr')[0];
                oTable.fnDeleteRow(nRow);
                alert("Deleted! Do not forget to do some ajax to sync with backend :)");
            });




            $('#sample_editable_1 a.cancel').live('click', function (e) {
                e.preventDefault();
                if ($(this).attr("data-mode") == "new") {
                    var nRow = $(this).parents('tr')[0];
                    oTable.fnDeleteRow(nRow);
                } else {
                    restoreRow(oTable, nEditing);
                    nEditing = null;
                }
            });

            $('#sample_editable_1 a.registerstudent').live('click', function (e) {
                e.preventDefault();
                var nRow = $(this).parents('tr')[0];
               // alert("haha");
                reg_Stud(oTable, nRow);
               
               
               
            });

            $('#sample_editable_1 a.generatepass').live('click', function (e) {
                e.preventDefault();
                var nRow = $(this).parents('tr')[0];
               // alert("haha");
                generate_pass(oTable, nRow);
                   
            });

            $('#sample_editable_1 a.upcourse').live('click', function (e) {
                e.preventDefault();
                var nRow = $(this).parents('tr')[0];
                Up_Course(oTable, nRow);  
               
            });

             $('#sample_editable_1 a.upAcc').live('click', function (e) {
                e.preventDefault();
                var nRow = $(this).parents('tr')[0];
                Up_Account(oTable, nRow);
    
            });

              $('#sample_editable_1 a.setElec').live('click', function (e) {
                e.preventDefault();
                var nRow = $(this).parents('tr')[0];
                set_election(oTable, nRow);
               
            });

              $('#sample_editable_1 a.setElec1').live('click', function (e) {
                e.preventDefault();
                var nRow = $(this).parents('tr')[0];
                set_election1(oTable, nRow);
               
            });
           
           
             $('#sample_editable_1 a.upStud').live('click', function (e) {
                e.preventDefault();
                var nRow = $(this).parents('tr')[0];
                Up_Student(oTable, nRow);
               
            });

              $('#sample_editable_1 a.upcand').live('click', function (e) {
                e.preventDefault();
                var nRow = $(this).parents('tr')[0];
                up_candidate(oTable, nRow);
               
            });
           

            $('#sample_editable_1 a.upParty').live('click', function (e) {
                e.preventDefault();

                /* Get the row as a parent of the link that was clicked on */
                var nRow = $(this).parents('tr')[0];

                if (nEditing !== null && nEditing != nRow) {
                    /* Currently editing - but not this row - restore the old before continuing to edit mode */
                    restoreRow(oTable, nEditing);
                    editRow(oTable, nRow);
                    nEditing = nRow;
                } else if (nEditing == nRow && this.innerHTML == "Save") {
                    /* Editing this row and want to save it */
                    saveRow(oTable, nEditing);
                    nEditing = null;
                    //alert("Updated! Do not forget to do some ajax to sync with backend :)");
                } else {
                    /* No edit in progress - let's start one */
                    editRow(oTable, nRow);
                    nEditing = nRow;
                }
            });
            
            $('#sample_editable_1 a.editt').live('click', function (e) {
                e.preventDefault();

                /* Get the row as a parent of the link that was clicked on */
                var nRow = $(this).parents('tr')[0];

                if (nEditing !== null && nEditing != nRow) {
                    /* Currently editing - but not this row - restore the old before continuing to edit mode */
                    restoreRow(oTable, nEditing);
                    editRow1(oTable, nRow);
                    nEditing = nRow;
                } else if (nEditing == nRow && this.innerHTML == "Save") {
                    /* Editing this row and want to save it */
                    saveRow1(oTable, nEditing);
                    nEditing = null;
        
                    //alert("Updated! Do not forget to do some ajax to sync with backend :)");
                } else {
                    /* No edit in progress - let's start one */
                    editRow1(oTable, nRow);
                    nEditing = nRow;
                }
            });

             $('#sample_editable_1 a.upPosition').live('click', function (e) {
                e.preventDefault();

                /* Get the row as a parent of the link that was clicked on */
                var nRow = $(this).parents('tr')[0];

                if (nEditing !== null && nEditing != nRow) {
                    /* Currently editing - but not this row - restore the old before continuing to edit mode */
                    restoreRow(oTable, nEditing);
                    editRow2(oTable, nRow);
                    nEditing = nRow;
                } else if (nEditing == nRow && this.innerHTML == "Save") {
                    /* Editing this row and want to save it */
                    saveRow2(oTable, nEditing);
                    nEditing = null;
        
                    //alert("Updated! Do not forget to do some ajax to sync with backend :)");
                } else {
                    /* No edit in progress - let's start one */
                    editRow2(oTable, nRow);
                    nEditing = nRow;
                }
            });

        }

    };

}();