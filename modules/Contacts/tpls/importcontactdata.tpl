<form enctype="multipart/form-data" action="index.php?module=Contacts&action=importcontactdataaction" method="POST">
    <br>
    <h2>Импорт контактов</h2>
    <br><br>
    <p>Выберите файл для импорта данных в CRM систему:</p>
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    <input name="userfile" type="file" accept=".csv"/>
    <!-- <select name="encode">
        <option value="Windows-1251">Windows-1251</option>
    </select> -->
    <input type="submit" value="Выполнить импорт" />
    
</form>