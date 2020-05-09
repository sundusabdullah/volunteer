var jq = $.noConflict();
jq( function() {
    jq('input[name="event_date"]').daterangepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        showClose: true,
        minDate: new Date(),
        "locale": {
            "format": "MM/DD/YYYY",
            "separator": " - ",
            "applyLabel": "تطبيق",
            "cancelLabel": "إلغاء",
            "fromLabel": "من",
            "toLabel": "الى",
            "customRangeLabel": "مخصص",
            "daysOfWeek": [
                "الأحد",
                "الأثنين",
                "الثلاثاء",
                "الاربعاء",
                "الخميس",
                "الجمعة",
                "السبت"
            ],
            "monthNames": [
                "يناير",
                "فبراير",
                "مارس",
                "أبريل",
                "مايو",
                "يونيو",
                "يوليو",
                "اغسطس",
                "سبتمبر",
                "اكتوبر",
                "نوفمبر",
                "ديسمبر"
            ],
            "firstDay": 1
        }
    });

});
