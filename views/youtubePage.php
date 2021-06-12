<body>
<style>
    form{
        margin: auto;
        background: aqua;
        text-align: center;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        width: 500px;
        margin-bottom: 50px;
    }

    .frame{
        text-align: center;
    }
</style>

<form action="../models/youtubeModel.php" method="post">
    <span>Ввставьте ссылку на видео ютуб для его отображения</span>
    <input type="url" name="urlVideo">
    <button type="submit">Отобразить видео</button>
</form>

</body>


