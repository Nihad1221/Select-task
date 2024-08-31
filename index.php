<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="form-group">
        <label for="buildingType">Tikili növü:</label>
        <select id="buildingType" class="form-control">
            <option value="" selected disabled>Seçin</option>
            <option value="yeni-tikili">Yeni tikili</option>
            <option value="heyet-bag">Həyət evi/Bağ evi</option>
            <option value="ofis">Ofis</option>
        </select>
    </div>

    <div id="form-class1" class="form-group" style="display: none;">
        <label for="roomCount">Otaq sayı:</label>
        <select id="roomCount" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>

        <label for="area" class="mt-3">Sahə:</label>
        <input type="text" id="area" class="form-control" value="100 m²">

        <label for="floor" class="mt-3">Mərtəbə:</label>
        <input type="text" id="floor" class="form-control">

        <label for="totalFloors" class="mt-3">Mərtəbələrin sayı:</label>
        <input type="text" id="totalFloors" class="form-control">
    </div>

    <div id="form-class2" class="form-group" style="display: none;">
        <label for="roomCount">Otaq sayı:</label>
        <select id="roomCount" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>

        <label for="landArea" class="mt-3">Sahə:</label>
        <input type="text" id="landArea" class="form-control" value="200 m²">

        <label for="landArea" class="mt-3">Torpağın sahəsi:</label>
        <input type="text" id="landArea" class="form-control" value="200 m²">
    </div>

    <div id="form-class3" class="form-group" style="display: none;">
        <form action="">
            <p>Binanın növü</p>
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label for="biznes plaza"> Biznes plaza</label><br>
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="ev-menzil">Ev / Mənzil</label><br>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="Villa">Villa</label>
        </form>

        <label for="roomCount">Otaq sayı:</label>
        <select id="roomCount" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
        </select>

        <label for="officeArea" class="mt-3">Sahə:</label>
        <input type="text" id="officeArea" class="form-control" value="150 m²">
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('#buildingType').change(function () {
            var selectedValue = $(this).val();
            $('.form-group').hide();
            $('#buildingType').parent().show();

            if (selectedValue == 'yeni-tikili') {
                $('#form-class1').show();
            } else if (selectedValue == 'heyet-bag') {
                $('#form-class2').show();
            } else if (selectedValue == 'ofis') {
                $('#form-class3').show();
            }
        });
    });
</script>
</body>
</html>
