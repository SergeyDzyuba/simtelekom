$(document).ready(function(){
    var search = $(location)[0]['search'];
    if (search.indexOf("openAppealSubpanel=1")>=0){
        //если развернута субпанель
        if ($('#hide_link_contact_appeals').attr('style').indexOf('display: none')<0) {
            if ($('#subpanel_title_contact_appeals').length != 0)
                $('#contact_appeals_Создать_button').click()
        }
        else {
            $('#show_link_contact_appeals').children().click();
            if ($('#subpanel_title_contact_appeals').length != 0)
                $('#contact_appeals_Создать_button').click()
        }
    }
});