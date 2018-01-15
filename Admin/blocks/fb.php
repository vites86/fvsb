<?php
   require_once("myclass.php");
   require_once 'soc_config.php';

        // https://www.facebook.com/dialog/oauth/?client_id=1001622006550427&redirect_uri=http://nrk.com.ua/Admin/blocks/fb.php&response_type=code&scope=publish_pages,publish_actions&status=granted&grant_type=client_credentials

        // https://graph.facebook.com/oauth/access_token?client_id=1001622006550427&redirect_uri=http://nrk.com.ua/Admin/blocks/fb.php&client_secret=c52203ad9a033cfd00e48a875ca0d111&code=AQDy4sS8-iCzwV-5St_zmd_oWTrQVQhKaw2exDDwkLpD8_mK3Nq7xpHoPoftvxhbDNxjop8IrQtr4ietCMLP6coj2ywA4txk34OrykxW5cgywnSOYgQW3_C4smmlCj5E8FrmSAVeGnU76a-95_wcKcp1mVhyQMuQsK9tfpgn7vj_A116I2qMNQAcS9luuCDkHQjOVUmERQZywxXtcYFWBLJYONkB8MYveWvZ_OnDSCs_KOh_h91eRDDDv1nE7OE0BT80QeNdFVhytCpYZsPkww9S4N0soandPFTbwCjiw0hXK3bBG9ATUbmwQdB2j1vvIresB8hBFAsupDA72qctapdr

        // https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id=1001622006550427&client_secret=c52203ad9a033cfd00e48a875ca0d111&fb_exchange_token=CAAOOZBEvmT5sBALvCfclaVZBe9f3maBZBe3hwhUObZCNW1pUoc6Jd5ybvFgi0ZBrfnBm6AtE1TkfXKPMtlLgYI45axV5L5ZC41CnzCiJsKlUE8QKOsHZCJJrA7wabYRktUXDHsrs5kEzno5LBhN2wIbnBtAvdQ9zDZANEk8QdIpQiIRWom3F9CCGwu29kL9VrWjIcjJmUDv1wAZDZD

        // https://graph.facebook.com/me/accounts?access_token=CAAOOZBEvmT5sBALoERmOVlkWD02ZAoQVFbsPb9JtFqsFRlRLIiIjndF2iRrPaG4uJgIZCczL2vxNrOKT2QjL8SzsJNCjyq79ZBmnFQBqw3r3SQp603stcxTNxU4WkEtBbhlubnOR0rk5T28gXAIQhKThQTldzrkr8ozYuJW6YWEfWZAWmRefAq9zfZBgdQXuzLSr6IKIA5jQZDZD

         //POSTING: https://graph.facebook.com/403426539822845/feed?access_token=CAAOOZBEvmT5sBALusgZCtEfrh25s5BVD4gMlXXuMVIy9VJQQqZB8Rdklt5qbPdgp1z1sQqfJvgkOAMshhkgvtAJsiomkafwFDj4qaYYhxt7aDOOLolj0ZAjfMluRKuSGkW30KE8OpNimI66M4wOr1vwsVg8HeHpjmVARLwYbXiG8ZCPTOZCEWZBHFmnQxKUM9ZCLx9WufECDvAZDZD&message=Тестування автоматичного постингу&caption=Test&method=post&name=test&picture=http://nrk.com.ua/img/news/1.jpg&link=http://nrk.com.ua/news.php?id=1&redirect_uri=http://www.nrk.com.ua/Admin/blocks/fb.php&description=descriptiontest
?>