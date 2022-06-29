<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/support.css">
    <link rel="stylesheet" href="/css/user-addticket.css">
    <link rel="stylesheet" href="/css/user-peygiri.css">
    <title>Support</title>
</head>
<body onload="startTime()">
    <div class="header">
        <div class="head-left">
            <div id="meno1" onclick="show_head()" >
                <svg  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 meno" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <div onclick="hide_head()">
                <svg id="close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 close-head" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <img class="logo" src="../images/logo.png" alt="">
        </div>
        <div class="head-right">
            <span class="text-h  text-h-name ">نام پشتیبان</span>
            <span id="text-add" class="text-h hide text-h-add" >  </span>
            <span id="text-p" class="text-h hide text-h-p" onclick="peygiri_ticket()">پیگیری تیکت ها</span>
            <span id="text-search" class="text-h hide text-h-search">جستجوی تیکت</span>
        </div>
    </div>
    <div id="new-ticket" class="contianer-add-ticket">
        <div class="add-ticket" dir="rtl">
            <form action="">
                <p id="button-back" class="btn-back" onclick="back_massage()">
                    <i class="fa-solid fa-chevron-left"></i>
                </p>
                <label for="titel">عنوان :</label>
                <p class="form-control" id="titel"></p>
                <label for="">خدمت مربوط :</label>
                <p class="form-control" id="service"></p>
                <!-- <select name="service" id="service" class="form-control" >
                    <option value="adobe">ادوب کانکت</option>
                    <option value="lessons">ورود و دروس دانشجو</option>
                    <option value="access">دسترسی اساتید</option>
                </select> -->
                <label for="massage">متن پیام :</label>
                <!-- <input type="" name="massage" class="massage-text" id="massage" required> -->
                <textarea name="massage" class="massage-text" id="massage" required cols="30" rows="10"></textarea>
                <div>
                    <label for="myfile">انتخاب فایل : </label>
                    <input type="file" class="file" id="myfile">
                </div>
                <!-- <div class="check">
                    <input id="checkbox" name="checkbox" class="check-box" type="checkbox">
                    <label for="checkbox">پاسخ تیکت از طریق ایمیل به من اطلاع رسانی شود</label>
                </div> -->
                <button class="btn-send">ارسال </button>
            </form>
        </div>
    </div>
    <div class="peygiri-massage">
        <div id="peygiri-ticket" class="peygiri-contianer" dir="rtl">
            <div class="peygiri">
                <div class="filter">
                    <p class="moror">مرور</p>
                    <form class="form1" action="">
                        <!-- <label for="">فیلتر : </label>
                        <select id="select-one" class="select1">
                                <option id="condition" onclick="show_select(1)" value="Condition">وضعیت</option>
                                <option id="topic" onclick="show_select(2)" value="Topic">موضوع</option>
                        </select> -->
                        <div>
                            <label for="">فیلتر وضعیت : </label>
                            <select id="select-condition" class="select2">
                                <option value="green">سبز</option>
                                <option value="yellow">زرد</option>
                                <option value="red">قرمز</option>
                            </select>
                        </div>
                        <div>
                            <label for="">فیلتر موضوع :  </label>
                            <select id="select-topic" class="select3">
                                <option value="adobe">ادوب کانکت</option>
                                <option value="lessons">ورود و دروس دانشجو</option>
                                <option value="access">دسترسی اساتید</option>
                            </select>
                        </div>
                    </form>
                </div>
                <hr>
                <!-- add ticket in box  -->
                <div class="contianer-ticket-list">
                    <ul class="ticket-list">
                        <li>1</li>
                        <li>ادوب کانکت</li>
                        <li>13/9/1399</li>
                        <li>باز</li>
                    </ul>
                    <ul class="ticket-list">
                        <li>1</li>
                        <li>ادوب </li>
                        <li>13/9/1399</li>
                        <li>باز</li>
                    </ul>
                    <ul class="ticket-list">
                        <li>5</li>
                        <li>ادوب کانکت</li>
                        <li>13/9/1399</li>
                        <li>باز</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="c-r-massage" class="contianer-replay-massage" dir="rtl">
            <div class="replay-massage">
                <div class="replay-massage-head">
                    <div><p>عنوان :</p></div>
                <div class="pbtn">
                        <!-- <p>وضعیت :</p> -->
                        <label for="select-cnd">وضعیت :</label>
                        <select id="select-cnd" class="change-condition">
                            <option value="adobe">باز</option>
                            <option value="lessons">در حال برسی</option>
                            <option value="access">بسته</option>
                        </select>
                        <p id="" class="btn-back-massage" onclick="hide_rmassage()">
                            <i class="fa-solid fa-chevron-left"></i>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="send-recive-massage">
                    <div class="send-massage">
                        <p class="margin-massage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, minima eum molestias temporibus cum ullam corrupti fugit velit assumenda ipsa adipisci vel reiciendis? Tenetur ab eveniet ut sequi ipsa perspiciatis?</p>
                        <span class="margin-massage">14:23</span>
                        <span class="margin-massage">1401/2/10</span>
                    </div>
                    <div class="recive-massage">
                        <p class="margin-massage">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas commodi maxime, inventore nobis, perferendis consequuntur praesentium nisi repellat, sint corrupti atque iusto sit dolor sapiente assumenda nulla odit veniam. Repellat.S</p>
                        <span class="margin-massage">8:30</span>
                        <span class="margin-massage">1401/2/11</span>
                    </div>
                    <button onclick="new_ticket()" class="btn-reply">ارسال پاسخ</button>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer">
        <hr>
        <div class="footer-p">
            <p class="footer-txt">سامانه تیکتینگ شهید رجایی</p>
            <div class="footer-date">
                <p id="txt" class="date"></p>
                <p id="txt-2" class="date"></p>
            </div>
        </div>
    </div>

    <script src="/js/user.js"></script>
</body>
</html>