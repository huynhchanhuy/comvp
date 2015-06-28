var abc = 0;      // Declaring and defining global increment variable.
$(document).ready(function() {

//  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
    $('#add_more').click(function() {
        $(this).parent().before($("<div/>", {
            id: 'filediv',
            class: 'form-group col-md-12'
        }).fadeIn('slow').append($("<input/>", {
            name: 'file[]',
            type: 'file',
            id: 'file'
        })));
    });
// Following function will executes on change event of file input to select different file.
    $('body').on('change', '#file', function() {
        if (this.files && this.files[0]) {
            abc += 1; // Incrementing global variable by 1.
            var z = abc - 1;
            var x = $(this).parent().find('#previewimg' + z).remove();
            $(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
            $(this).hide();
            $("#abcd" + abc).append($("<a/>",{id:"anchor"+abc,href:"#"}));
            $("#anchor" + abc).append($("<img/>", {
                id: 'img',
                src: 'styles/admin/ext/img/x.png',
                alt: 'delete',
                tag: 'img'+abc
            }).click(function() {
                $(this).parent().parent().remove();
            }));
        }
    });
// To Preview Image
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    }
    ;
    $('#upload').click(function(e) {
        var name = $(":file").val();
        if (!name) {
            alert("First Image Must Be Selected");
            e.preventDefault();
        }
    });
});