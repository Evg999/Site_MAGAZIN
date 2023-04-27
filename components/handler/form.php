<div class="screen">
        <div class="screen-center">
            <img class=logo-forma src="img/icons/logo.png" alt="Лого">
            <div class="krestik-box"></div>
            
            <h2>Напишите Нам:</h2>
            <form id="questionForm" method="GET" action="system/controllers/orders/create.php" autocapitalize="off">
                <div class="form-item">
                  <input data-length="20" type="text" name="surname" placeholder="ФИО">
                </div>
                <div class="form-item">
                    <input data-length="20"type="number" name="phone" placeholder="Телефон">
                </div>
                <div class="form-item">
                    <input  data-length="1000"  type="text" name="adress" placeholder="Адресc"> 
                </div>
                <div class="form-item">
                    <input data-length="50" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-item">
                    <input data-length="20"type="date" name="time_client" placeholder="Заплонируем уборку на:">
                </div>
                <div class="form-item">
                    <input type="hidden" name="good" value="<?= $good->title() ?>">
                </div>
                <!-- <div class="form-item">
                    <h3>Как с тобой связаться:</h3>
                    <input type="checkbox" name="contact[]" value="по телефону"> по телефону<br>
                    <input type="checkbox" name="contact[]" value="по email"> по email<br>
                    <input type="checkbox" name="contact[]" value="по WhatsApp"> по WhatsApp
                </div>
                <div class="form-item">
                    <h3>Выбери путешествие</h3>
                    name="tur[]" должен быть без масива в отличие от type="checkbox"
                    <input type="radio" name="tur" value="Путешествия по России"> Путешествия по России<br>
                    <input type="radio" name="tur" value="Путешествия по Европе"> Путешествия по Европе <br>
                    <input type="radio" name="tur" value="Путешествия по Африке"> Путешествия по Африке
                </div> -->
                <div class="form-item">
                    <textarea data-length="1000" name="coment" placeholder="Ваш текст"></textarea>
                </div>
                <!-- data-length='' пользовательский атрибут ограничивает по колво символов -->
                <input type="submit" value="Отправить вопрос">
            </form>
        </div>
    </div>