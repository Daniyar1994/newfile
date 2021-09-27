<?php 

include('includes/header.php')
?>

<section class="site-contacts">
        <div class="container">
            <div class="col-lg-12">
                <h1 class="site-contacts__title wow animate__ animate__fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Контакты</h1>
                <span class="site-contacts__subtitle wow animate__ animate__fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Мы всегда рады видеть вас в качестве клиентов, партнеров и сотрудников у себя в офисе.</span>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="site-contacts-adres wow animate__ animate__fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                            <span>Адрес</span>
							<span>ТОО "Студия Alteman"<br>
                                Казахстан<br>
                                г. Шымкент <br> ул. Алдиярова 49</span>
							
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="site-contacts-rekvizits wow animate__ animate__fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                       
                            <span>
                                +7 707 333 0426<br>
                                roman@alteman.kz</span>
                        </div>
                    </div>
                </div>
                <div class="site-contacts-backcall wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <form action="kontakty-form.php" method="get">
                        <input name="name" type="text" placeholder="Введите имя" maxlength="30" required="">
                        <input name="number" id="site-contacts-backcall-phon" type="text" placeholder="Введите телефон" required="">
                        <textarea name="message" placeholder="Введите сообщение" maxlength="100"></textarea>
                        <button type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>

    </section>


<?php 

include('includes/footer.php')
?>
