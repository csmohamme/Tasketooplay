<?php include "layout/header.php" ?>
<div class=" exam">

    <div class="row">
        <div class="col-md-12 col-ms-12">
            <label for="StudentName" class="StudentName">
                اسم الممتحن
            </label>
        </div>
    </div>
    <form method="post" class="">

        <h4>1. الوسط الحسابي للبيانات 2،11،5،2،8،2 هو:</h4>
        <input type="hidden" name="QutID1" value="15" class="">
        <div class="form-group">
            <input type="radio" name="Answer1" value="47" /> 6
            <br>
            <input type="radio" name="Answer1" value="48" /> 2
            <br>
            <input type="radio" name="Answer1" value="49" /> 5
            <br>
            <input type="radio" name="Answer1" value="50" /> 8
            <br>
        </div>
        <input type="hidden" name="n" value="2">
        <h4>2. الزاوية المحصورة بين المماس ونصف قطر الدائرة:</h4>
        <input type="hidden" name="QutID2" value="22">
        <div class="form-group">
            <input type="radio" name="Answer2" value="72" /> قائمة
            <br>
            <input type="radio" name="Answer2" value="73" /> حادة
            <br>
            <input type="radio" name="Answer2" value="74" /> منفرجة
            <br>
            <input type="radio" name="Answer2" value="75" /> مستقيمة
            <br>
        </div>
        <input type="hidden" name="n" value="3">
        <h4>3. المنوال من البيانات التالية 4،3،10،11،12:</h4>
        <input type="hidden" name="QutID3" value="18">
        <div class="form-group">
            <input type="radio" name="Answer3" value="58" /> 11
            <br>
            <input type="radio" name="Answer3" value="59" /> 12
            <br>
            <input type="radio" name="Answer3" value="60" /> 10
            <br>
            <input type="radio" name="Answer3" value="61" /> كل الاجابات خطأ
            <br>
        </div>
        <input type="hidden" name="n" value="4">
        <h4>4. الفئة المنوالية هي الفئة التي يقابلها:</h4>
        <input type="hidden" name="QutID4" value="19">
        <div class="form-group">
            <input type="radio" name="Answer4" value="62" /> اصغر تكرار
            <br>
            <input type="radio" name="Answer4" value="63" /> اكبر تكرار
            <br>
        </div>
        <input type="hidden" name="n" value="5">
        <h4>5. س×1=س وفقا لخاصية:</h4>
        <input type="hidden" name="QutID5" value="7">
        <div class="form-group">
            <input type="radio" name="Answer5" value="17" /> الاغلاق
            <br>
            <input type="radio" name="Answer5" value="18" /> النظير الضربي
            <br>
            <input type="radio" name="Answer5" value="19" /> العنصر المحايد للضرب
            <br>
            <input type="radio" name="Answer5" value="20" /> العنصر المحايد للجمع
            <br>
        </div>
        <input type="hidden" name="n" value="6">
        <h4>6. -8+8= صفر وفقا لخاصية:</h4>
        <input type="hidden" name="QutID6" value="5">
        <div class="form-group">
            <input type="radio" name="Answer6" value="9" /> العنصر المحايد للجمع
            <br>
            <input type="radio" name="Answer6" value="10" /> المعكوس الجمعي
            <br>
            <input type="radio" name="Answer6" value="11" /> الابدال
            <br>
            <input type="radio" name="Answer6" value="12" /> التجمع
            <br>
        </div>
        <input type="hidden" name="n" value="7">
        <h4>7. 7 قيم اصغرها 3 واكبرها 13 ووسطها الحسابي 4، المدى لهذه القيم هو :</h4>
        <input type="hidden" name="QutID7" value="17">
        <div class="form-group">
            <input type="radio" name="Answer7" value="54" /> 10
            <br>
            <input type="radio" name="Answer7" value="55" /> 3
            <br>
            <input type="radio" name="Answer7" value="56" /> 9
            <br>
            <input type="radio" name="Answer7" value="57" /> 6
            <br>
        </div>
        <input type="hidden" name="n" value="8">
        <h4>8. يوجد معكوس التطبيق اذا كان التطبيق شاملا و....:</h4>
        <input type="hidden" name="QutID8" value="13">
        <div class="form-group">
            <input type="radio" name="Answer8" value="41" /> متباينا
            <br>
            <input type="radio" name="Answer8" value="42" /> غير متباين
            <br>
            <input type="radio" name="Answer8" value="43" /> الاجابتان خطأ
            <br>
        </div>
        <input type="hidden" name="n" value="9">
        <h4>9. في اي مثلث مجموع اي ضلعين ....... الضلع الثالث:</h4>
        <input type="hidden" name="QutID9" value="14">
        <div class="form-group">
            <input type="radio" name="Answer9" value="44" /> يساوي
            <br>
            <input type="radio" name="Answer9" value="45" /> اكبر من
            <br>
            <input type="radio" name="Answer9" value="46" /> اصغر من
            <br>
        </div>
        <input type="hidden" name="n" value="10">
        <h4>10. الزاوية المحيطة المرسومة على قطر الدائرة:</h4>
        <input type="hidden" name="QutID10" value="12">
        <div class="form-group">
            <input type="radio" name="Answer10" value="37" /> 90 درجة
            <br>
            <input type="radio" name="Answer10" value="38" /> 180 درجة
            <br>
            <input type="radio" name="Answer10" value="39" /> 30 درجة
            <br>
            <input type="radio" name="Answer10" value="40" /> 60 درجة
            <br>
        </div>
        <input type="hidden" name="n" value="11">
        <input type="submit" class="btn btn-success form-group" name="finish" value="الانتهاء من الامتحان">
    </form>
</div>
<?php include "layout/footer.php" ?>