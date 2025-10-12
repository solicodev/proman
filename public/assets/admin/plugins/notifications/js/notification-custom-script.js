/* Default Notifications */
function default_noti() {
    Lobibox.notify("default", {
        title: "پیش فرض",
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "top right",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function info_noti() {
    Lobibox.notify("info", {
        title: "اطلاعات",
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "top right",
        icon: "bx bx-info-circle",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function warning_noti() {
    Lobibox.notify("warning", {
        title: "هشدار",
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "top right",
        icon: "bx bx-error",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function error_noti() {
    Lobibox.notify("error", {
        title: "خطا",
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "top right",
        icon: "bx bx-x-circle",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function success_noti() {
    Lobibox.notify("success", {
        title: "موفقیت",
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "top right",
        icon: "bx bx-check-circle",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}
/* Rounded corners Notifications */
function round_default_noti() {
    Lobibox.notify("default", {
        title: "پیشفرض",
        pauseDelayOnHover: true,
        size: "mini",
        rounded: true,
        delayIndicator: false,
        continueDelayOnInactiveTab: false,
        position: "top right",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function round_info_noti() {
    Lobibox.notify("info", {
        title: "اطلاعات",
        pauseDelayOnHover: true,
        size: "mini",
        rounded: true,
        icon: "bx bx-info-circle",
        delayIndicator: false,
        continueDelayOnInactiveTab: false,
        position: "top right",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function round_warning_noti() {
    Lobibox.notify("warning", {
        title: "هشدار",
        pauseDelayOnHover: true,
        size: "mini",
        rounded: true,
        delayIndicator: false,
        icon: "bx bx-error",
        continueDelayOnInactiveTab: false,
        position: "top right",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function round_error_noti() {
    Lobibox.notify("error", {
        title: "خطا",
        pauseDelayOnHover: true,
        size: "mini",
        rounded: true,
        delayIndicator: false,
        icon: "bx bx-x-circle",
        continueDelayOnInactiveTab: false,
        position: "top right",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function round_success_noti() {
    Lobibox.notify("success", {
        title: "موفقیت",
        pauseDelayOnHover: true,
        size: "mini",
        rounded: true,
        icon: "bx bx-check-circle",
        delayIndicator: false,
        continueDelayOnInactiveTab: false,
        position: "top right",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}
/* Notifications With Images*/
function img_default_noti() {
    Lobibox.notify("default", {
        title: "پیشفرض",
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "top right",
        img: "assets/plugins/notifications/img/1.jpg", //path to image
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function img_info_noti() {
    Lobibox.notify("info", {
        title: "اطلاعات",
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        icon: "bx bx-info-circle",
        position: "top right",
        img: "assets/plugins/notifications/img/2.jpg", //path to image
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function img_warning_noti() {
    Lobibox.notify("warning", {
        title: "هشدار",
        pauseDelayOnHover: true,
        icon: "bx bx-error",
        continueDelayOnInactiveTab: false,
        position: "top right",
        img: "assets/plugins/notifications/img/3.jpg", //path to image
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function img_error_noti() {
    Lobibox.notify("error", {
        title: "خطا",
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        icon: "bx bx-x-circle",
        position: "top right",
        img: "assets/plugins/notifications/img/4.jpg", //path to image
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function img_success_noti() {
    Lobibox.notify("success", {
        title: "موفقیت",
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "top right",
        icon: "bx bx-check-circle",
        img: "assets/plugins/notifications/img/5.jpg", //path to image
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}
/* Notifications With Images*/
function pos1_default_noti() {
    Lobibox.notify("default", {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "center top",
        size: "mini",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function pos2_info_noti() {
    Lobibox.notify("info", {
        pauseDelayOnHover: true,
        icon: "bx bx-info-circle",
        continueDelayOnInactiveTab: false,
        position: "top left",
        size: "mini",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function pos3_warning_noti() {
    Lobibox.notify("warning", {
        pauseDelayOnHover: true,
        icon: "bx bx-error",
        continueDelayOnInactiveTab: false,
        position: "top right",
        size: "mini",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function pos4_error_noti() {
    Lobibox.notify("error", {
        pauseDelayOnHover: true,
        icon: "bx bx-x-circle",
        size: "mini",
        continueDelayOnInactiveTab: false,
        position: "bottom left",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function pos5_success_noti() {
    Lobibox.notify("success", {
        pauseDelayOnHover: true,
        size: "mini",
        icon: "bx bx-check-circle",
        continueDelayOnInactiveTab: false,
        position: "bottom right",
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}
/* Animated Notifications*/
function anim1_noti() {
    Lobibox.notify("default", {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "center top",
        showClass: "fadeInDown",
        hideClass: "fadeOutDown",
        width: 600,
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function anim2_noti() {
    Lobibox.notify("info", {
        pauseDelayOnHover: true,
        icon: "bx bx-info-circle",
        continueDelayOnInactiveTab: false,
        position: "center top",
        showClass: "bounceIn",
        hideClass: "bounceOut",
        width: 600,
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function anim3_noti() {
    Lobibox.notify("warning", {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        icon: "bx bx-error",
        position: "center top",
        showClass: "zoomIn",
        hideClass: "zoomOut",
        width: 600,
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function anim4_noti() {
    Lobibox.notify("error", {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        icon: "",
        position: "center top",
        showClass: "lightSpeedIn",
        hideClass: "lightSpeedOut",
        icon: "bx bx-x-circle",
        width: 600,
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}

function anim5_noti() {
    Lobibox.notify("success", {
        pauseDelayOnHover: true,
        continueDelayOnInactiveTab: false,
        position: "center top",
        showClass: "rollIn",
        hideClass: "rollOut",
        icon: "bx bx-check-circle",
        width: 600,
        msg: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ .",
    });
}
