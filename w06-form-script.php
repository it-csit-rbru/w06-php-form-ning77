<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ระบบเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="get">
      <fieldset id="sect1">
         <legend>ส่วนที่ 1 ข้อมูลผู้จัดทำโครงงาน</legend>
         <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
         <label for="fname">ชื่อ</label><input type="text" name="fname">
         <label for="lname">นามสกุล</label><input type="text" name="lname">
         <label for="program">สาขาวิชา</label>
         <select name="program">
            <option value="1">วิทยาการคอมพิวเตอร์</option>
            <option value="2">คอมพิวเตอร์ศึกษา</option>
         </select>
         <label for="faculty">คณะ</label>
          <select name="faculty">
            <option value="1">วิทยาการคอมพิวเตอร์</option>
            <option value="2">ครุศาสตร์</option>
            </select>
         <label for="std_year">ชั้นปี</label>   
         <input type="radio"name="std_year" value="1"><label>ปี 1</label>  
         <input type="radio"name="std_year" value="2"><label>ปี 2</label>  
         <input type="radio"name="std_year" value="3"><label>ปี 3</label>  
         <input type="radio"name="std_year" value="4"><label>ปี 4</label>  
         <input type="radio"name="std_year" value="5"><label>ปี 5</label> 
</fieldset>
<fieldset id="sect2">
    <label for="prj_name_th">ชื่อโครงงาน(ภาษาไทย)</label><textarea name="prj_name_th"></textarea><br>
    <label for="prj_name_en">ชื่อโครงงาน(ภาษาอังกฤษ)</label><textarea name="prj_name_en"></textarea><br>
    <label for="prj_type">ประเภทโครงงาน</label>
    <select name="prj_type">
        <option value="1">ฐานข้อมูล</option>
        <option value="2">เกม</option>
        <option value="3">CAI</option>
        <option value="4">สื่อการสอน</option>
        <option value="5">โปรแกรมมือถือ</option>
     </select><br> 
     <label for="prj_tool">เครื่องมือที่ใช้</label>
     <input type="checkbox"name="prj_tool[]" value="1"><label>HTML</label>
     <input type="checkbox"name="prj_tool[]" value="2"><label>CSS</label>
     <input type="checkbox"name="prj_tool[]" value="3"><label>PHP</label>
     <input type="checkbox"name="prj_tool[]" value="4"><label>MySQL</label>
     <input type="checkbox"name="prj_tool[]" value="5"><label>CharJS</label>
     <input type="checkbox"name="prj_tool[]" value="6"><label>Javascript</label><br>
     <label>อาจารย์ที่ปรึกษา</label>
     <select name="prj_advisor">
        <option value="1">ผศ.บุญเรื่อน พฤกษ์ศศิธร</option>
        <option value="2">นที ยงยุทธ</option>
        <option value="3">อาจารย์ คงกฤช ปิตานน</option>
        </select>
        <input type="submit" value="GO">
</fieldset>
</form>
</body>
</html>