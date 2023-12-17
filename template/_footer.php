<footer>
    <div class="container">
        <div class="questionsAndSuggestions">
            <div class="questionsAndSuggestionsText">
                <h3>Есть вопросы или предложения?</h3>

                <p>Если у вас есть вопросы или предложения, оставьте свой e-mail — мы свяжемся с Вами, чтобы ответить на все ваши вопросы.</p>
            </div>

            <div class="questionsAndSuggestionsFormContainer">
                <form action="" method="post" class="questionsAndSuggestionsForm">
                    <input type="text" placeholder="Ваше имя">
                    <input type="text" placeholder="Ваш e-mail">

                    <textarea placeholder="Ваше сообщение"></textarea>

                    <div class="formBtnInfo">
                        <input type="submit" class="formSubmit" value="Отправить">

                        <p>Нажимая на кнопку, я соглашаюсь на персональных данных и с правилами пользования Платформой</p>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="questionsAndSuggestionsContainer">
            <div class="questionsAndSuggestionsTransparency50"></div>
            <div class="questionsAndSuggestionsTransparency20"></div>
        </div>

        <div class="footerContent">
            <div class="footerItem">
                <h3>Пользователям</h3>

                <a href="">Главная</a>
                <a href="">Задачи</a>
                <a href="">Курс</a>
            </div>

            <div class="footerItem">
                <h3>О нас</h3>

                <a href="">О проекте</a>
                <a href="">Блог</a>
            </div>

            <div class="footerItem">
                <h3>Условия</h3>

                <a href="">Условия использования</a>
                <a href="">Политика конфиденциальности</a>
            </div>

            <div class="footerItem">
                <h3>Мы в социальных сетях:</h3>

                <a href="">Telegram</a>
                <a href="">ВКонтакте</a>
                <a href="">Одноклассники</a>
            </div>
        </div>

    </div>

    <div class="footerBottomContent">
        <div class="container">
            <div class="footerBottom">
                <p>Edu-pro | все права защищены</p>

                <p>Разработка сервиса <a href="https://s11web.ru">s11web.ru</a></p>
            </div>
        </div>
    </div>
</footer>


<script>
    $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
&& location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 138 //offsets for fixed header
        }, 1200);
        return false;
      }
    }
  });
  //Executed on page load with URL containing an anchor tag.
  if($(location.href.split("#")[1])) {
      var target = $('#'+location.href.split("#")[1]);
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 138 //offset height of header here too.
        }, 1200);
        return false;
      }
    }
});
</script>

<script src="../js/main.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>