<!DOCTYPE html>
<html>

<head>
    <title>INPUT DATA</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style type='text/css'>
        .form-control {
            border-bottom: 3px solid #ccc;
            border-left: none;
            border-right: none;
            border-top: none;
            outline: none;
            width: 100%;
        }
    </style>
</head>

<body>

    <h3>Tinggalkan Komentar</h3>

    <div class="container">
        <form method="POST" id="comment_form">
            <div class="form-group col-6" style="margin-bottom: 10px;">
                <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Masukkan Nama" />
            </div>
            <div class="form-group">
                <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Masukkan Komentar" rows="5"></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="comment_id" id="comment_id" value="0" />
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Kirim" />
            </div>
        </form>

        <span id="comment_message"></span>
        <br />
        <div id="display_comment"></div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {

        $('#comment_form').on('submit', function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "add_comment.php",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                success: function(data) {
                    if (data.error != '') {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                    }
                }
            })
        });
        load_comment();

        function load_comment() {
            $.ajax({
                url: "fetch_comment.php",
                method: "POST",
                success: function(data) {
                    $('#display_comment').html(data);
                }
            })
        }
        $(document).on('click', '.reply', function() {
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('#comment_name').focus();
        });

    });
</script>