$("#upload_sample_vd").click(function() {
        var v_name = $('#v_name').val();
        var v_desc = $('#v_desc').val();
        var v_image = $('#v_image').val();
        var v_file = $('#v_file').val();
        if((v_name !='') &&  (v_image !='') && (v_file !='')){
        $('#loader_div').removeClass('hidden');
        // $('#cancel_sample_vd').removeClass('hidden');
        // $('#upload_sample_vd').addClass('hidden');
        

        }
    });

// $("#cancel_sample_vd").click(function() {
//         $('#loader_div').addClass('hidden');
//         $('#cancel_sample_vd').addClass('hidden');
//         $('#upload_sample_vd').removeClass('hidden');
//        window.stop();  
//         window.location.href = $(location).attr('href');
        

//     });

//for chapter

$("#upload_chapter_vd").click(function() {
        var v_name = $('#video_names').val();
        var chapter_name = $('#chapter_name').val();
        var chapter_discription = $('#chapter_discription').val();
        var v_file = $('#v_file').val();
        if((v_name !='') &&  (chapter_name !='') && (chapter_discription !='')){
        $('#loader_div').removeClass('hidden');
        
        

        }
    });


///add topic div
var num = 1;
function add_fields() {
    num++;
    var objTo = document.getElementById('room_fileds')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div class="col-sm-5"><div class="form-group"><div class="input text"><label for="topic_name">Topic Name ' + num +'</label><input name="data[Topic][topic_name][]" class="form-control" required="required" id="topic_name" type="text"></div></div></div><div class="col-sm-5 col-sm-offset-1"> <div class="form-group"><div class="input text"> <label for="topic_timing">Topic Timing ' + num +'</label><input name="data[Topic][topic_timing][]" class="form-control" required="required" id="topic_timing" type="text" placeholder="00:00:00"></div></div></div>';
    
    objTo.appendChild(divtest)
}


///edit  topic div
var num = 1;
function edit_fields() {
    num++;
    var objTo = document.getElementById('room_filedss')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div class="col-sm-5"><div class="form-group"><div class="input text"><label for="topic_name">Topic Name ' + num +'</label><input name="data[Topic][topic_names][]" class="form-control" required="required" id="topic_name" type="text"></div></div></div><div class="col-sm-5 col-sm-offset-1"> <div class="form-group"><div class="input text"> <label for="topic_timing">Topic Timing ' + num +'</label><input name="data[Topic][topic_timings][]" class="form-control" required="required" id="topic_timing" type="text" placeholder="00:00:00"></div></div></div>';
    
    objTo.appendChild(divtest)
}