<main>
<form action="../../handlers/form-handler.php" method="post">
        <div>
            <label>Ваше имя: <input name="name" type="text" size="30"></label>
        </div>
        <div>
            <label>Ваш возраст: <input name="age" type="number"></label>
        </div>
        <div>
            <label>Ваш E-mail: <input name="email" type="email"></label>
        </div>
        <div>
            <label>Ваше мнение о нас напишите тут:
                <textarea name="message" cols="40" rows="4" placeholder="Ваше мнение..."></textarea>
            </label>
        </div>
        <div>
            <input type="reset" value="Стереть"/>
            <input type="submit" value="Передать" name="start"/>
        </div>
    </form>
</main>