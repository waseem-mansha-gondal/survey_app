<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
		<?php echo $title_for_layout; ?>
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>


      
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <style type="text/css">
            body{ padding: 70px 0px; }
            * {
                .border-radius(0) !important;
            }

            #field {
                margin-bottom:20px;
            }
        </style>

    </head>

    <body>

    <?php echo $this->Element('navigation'); ?>

        <div class="container">

			<?php 
                     echo $this->Flash->render(); ?>



			<?php echo $this->fetch('content'); ?>

        </div><!-- /.container -->

    </body>
    <script type="text/javascript">
        $(document).ready(function () {
            var next = 1;
            $(".add-more").click(function (e) {
                e.preventDefault();
                var addto = "#field" + next;
                var addRemove = "#field" + (next);
                next = next + 1;
                var fildName = "data[QuestionOption]["+next+"][value]";
                var newIn = '<label for="SurveyQuestionOrder" id=lable'+next+' >Option ' + next + ' Text</label><input autocomplete="off" class="input form-control" id="field' + next + '" name="' + fildName + '" type="text">';
                var newInput = $(newIn);
                var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
                var removeButton = $(removeBtn);
                $(addto).after(newInput);
                $(addRemove).after(removeButton);
                $("#field" + next).attr('data-source', $(addto).attr('data-source'));
                $("#count").val(next);

                $('.remove-me').click(function (e) {
                    e.preventDefault();
                    var fieldNum = this.id.charAt(this.id.length - 1);
                    var fieldID = "#field" + fieldNum;
                    var labelID = "#label" + fieldNum;
                    $(this).remove();
                    $(fieldID).remove();
                    $(labelID).remove();
                });
            });



        });

    </script>
</html>