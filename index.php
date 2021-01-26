<?php include "layout/header.php" ?>


<div class="container main-section">
    <img src="images/khaleek.png" class="img-fluid" alt="دكتورة ام سلمة بشير" />
    <form action="exam.php" method="GET">
        <input Type="hidden" id="userID" name="userID" value="121212">
        <div class="form-group">
            <input class="form-control input" type="text" id="ID" name="ID" required="required"
                placeholder="ادخل رقم ID الخاص بك" />
        </div>
        <div class="form-group">
            <a href="#" class="right" data-toggle="modal" data-target="#myModalCreate"> خاص بيك ID انشاء رقم</a>
            <a href="#" class="left" data-toggle="modal" data-target="#myModalRecover"> خاص بيك ID هل نسيت رقم</a>
        </div>

    </form>
</div>
<!-- login form -->

<!-- The Modal for create ID -->
<div class="modal" id="myModalCreate">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label for="stdName">اسم الممتحن</label>
                <input type="text" id="stdName" placeholder="ادخل الاسم رباعي" class="form-control input">
                <label for="stdPhone">رقم الهاتف</label>
                <input type="text" id="stdPhone" placeholder="ادخل رقم الهاتف بدون مفتاح الدولة"
                    class="form-control input">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success form-control" data-target="modal" id="createID">ID إنشاء
                    رقم</button>
            </div>

        </div>
    </div>
</div>

<!-- The Modal for recover ID -->
<div class="modal" id="myModalRecover">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label for="stdPhone">رقم الهاتف</label>
                <input type="text" id="stdPhone" placeholder="ادخل رقم الهاتف بدون مفتاح الدولة"
                    class="form-control input">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="btn btn-success form-control" data-target="modal" id="recoverID">ID ارسال
                    رقم</button>
            </div>

        </div>
        <?php include "layout/footer.php" ?>