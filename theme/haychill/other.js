function close_up_avt() {
    $("#background_lamps").remove(), $(".modalz").hide(), $(".modalz-fix.change_avatar").hide(), $(".fallback").hide(), $("#user_profile_form").show(), $(".title_update").html(""), $("#images").val(""), $("#images").remove(), $(".button-upload").append('<input type="file" name="images" id="images" accept="image/*">')
}

function TeleLearn() {
    var t = document.getElementsByClassName("telelearn")[0];
    "none" === t.style.display ? t.style.display = "block" : t.style.display = "none"
}

function activeTabFastInfo(t) {
    $(".wrappertab_fastinfo .tab_fastinfo").removeClass("active"), $(t).addClass("active");
    var e = $(t).find("a").attr("href");
    $(".tab_content_fastinfo").hide(), $(e).show()
}

function activeTabFastLogin(t) {
    $(".tab_content_fastlogin").removeClass("active"), $(".tab_content_fastlogin").hide(), $("#modal-tab-" + t).addClass("active"), $("#modal-tab-" + t).show(), $("#user_fastlogin_noti").html("")
}

function fastlogin() {
    $("#user_fastlogin_noti").html(""), $("#background_lamps").remove(), $("body").append('<div id="background_lamps"></div>'), $(".user_fastlogin").show(), $(".tab_content_fastlogin").removeClass("active"), $(".tab_content_fastlogin").hide(), $("#modal-tab-login").addClass("active"), $("#modal-tab-login").show()
}

function fastregister() {
    $("#user_fastlogin_noti").html(""), $("#background_lamps").remove(), $("body").append('<div id="background_lamps"></div>'), $(".user_fastlogin").show(), $(".tab_content_fastlogin").removeClass("active"), $(".tab_content_fastlogin").hide(), $("#modal-tab-register").addClass("active"), $("#modal-tab-register").show()
}

function activeTabCmt(t) {
    $(".tab-wrapper .tabs-cmt .tab-cmt").removeClass("active"), $(t).addClass("active");
    var e = $(t).find("a").attr("href");
    $(".tab-item-cmt").hide(), $(e).show()
}

function activeTabOther(t) {
    $(".wrappertab_other .tab_other").removeClass("active"), $(t).addClass("active");
    var e = $(t).find("a").attr("href");
    $(".tab_content_other").hide(), $(e).show()
}

function load_cmt(t) {
    $.post(BASE_URL + "/ajax/loadcmt/" + RandomNumberString(), {
        filmid: MovieID,
        page: t,
        limit: 0
    }, function(t) {
        "" === t ? ($("#cmt-loadmore").addClass("hide"), $("#cmt-load-content").html(""), $("#cmt-noload-content").html('<center class="fs-16 color-black p-2">HĂ£y lĂ  ngÆ°á»i Ä‘áº§u tiĂªn bĂ¬nh luáº­n!</center>')) : (t = (t = t.replace(/\[\[/gi, "<span class='user-tag'>")).replace(/\]\]/gi, "</span>"), $("#cmt-load-content").html(t))
    }, "text")
}

function loadmore_replycmt(t) {
    var e = $(t).data("cmtid");
    e && $.ajax({
        url: "/ajax/loadmorereply/" + RandomNumberString(),
        type: "post",
        dataType: "text",
        data: {
            cmtid: e
        },
        beforeSend: function() {
            $(t).hide(), $(".toggle_frame_comment_" + e).html("<div style='padding:10px;text-align:center'><img height='15' width='15' src='https://dataqq.net/theme/loading_spinner_24x24.gif'/></div>")
        },
        success: function(t) {
            t = (t = t.replace(/\[\[/gi, "<span class='user-tag'>")).replace(/\]\]/gi, "</span>"), $(".toggle_frame_comment_" + e).html(t)
        }
    })
}

function ghim(t) {
    var e = $(t).data("id"),
        a = $(t).data("type");
    e && $.ajax({
        url: "/ajax/ghimcmt/" + RandomNumberString(),
        type: "post",
        dataType: "json",
        data: {
            cmtid: e,
            type: a
        },
        beforeSend: function() {
            $(t).html("<img height='15' width='15' src='https://dataqq.net/theme/loading_spinner_24x24.gif'/>")
        },
        success: function(e) {
            "addpin" == e.status && load_cmt(), "unpin" == e.status && load_cmt(), $(t).html(e.content)
        }
    })
}

function AddReplyComment(t, e, a, n) {
    $(".frame-reply-comments").addClass("hide"), $.ajax({
        url: "/ajax/replycmt/" + RandomNumberString(),
        type: "post",
        dataType: "json",
        data: {
            cmtid: t,
            userrep: a,
            content: $("#cmt-content-" + t).val(),
            filmid: n
        },
        beforeSend: function() {
            $("#cmt-reply").attr("disabled", "disabled"), $("#cmt-reply").append("<img height='15' width='15' src='https://dataqq.net/theme/loading_spinner_24x24.gif' style='margin-left:10px' class='cmt-reply-loading'/>")
        },
        success: function(a) {
            $(".cmt-reply-loading").remove(), $("#cmt-reply").removeAttr("disabled"), "true" == a.status ? ($(".cmt-noti").hide(), $(".frame-reply-comments").removeClass("show"), elementcontent = $("#cmt-content-" + t).val(), elementcontent = elementcontent.replace(/\[\[/gi, "<span class='user-tag'>"), elementcontent = elementcontent.replace(/\]\]/gi, "</span>"), resultreply = '<div id=""><div id="reply_comment_' + t + '" class="user-comment"><div class="flex bg-comment"><div class="left center"> <div class="avatar"><img src="' + UserAvatar + '" class="avatar-main"><img src="https://dataqq.net/store/avatar/' + UserAvtSelect + '" class="avatar-level"></div></div><div class="right"><div class="flex flex-column"><div class="flex flex-space-auto"><div class="flex flex-hozi-center"><span class="vip_icon vip_icon_' + UserICON + '"></span><span class="nickname' + UserGroup + '">' + UserName + UserFC + UserVIP + '</span></div></div><div class="content">' + elementcontent + '</div><div class="flex fs-12 toolbarr"><span class="cmt-time color-gray">Vá»«a xong</span></div></div> </div></div></div></div>', $("#feedback_" + t + "_" + e).html(""), $("#feedback_" + t + "_" + e).after(resultreply)) : "new" == a.status ? ($(".cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">TĂ i khoáº£n má»›i chÆ°a thá»ƒ bĂ¬nh luáº­n. Vui lĂ²ng thá»­ láº¡i sau ' + a.time + " ná»¯a</div></div>"), $(".cmt-noti").show(), setTimeout(function() {
                $(".cmt-noti").hide()
            }, 1e4)) : "limitcmt" == a.status ? ($(".cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">Báº¡n Ä‘ang spam quĂ¡ nhanh. Vui lĂ²ng thá»­ láº¡i sau ' + a.time + " ná»¯a</div></div>"), $(".cmt-noti").show(), setTimeout(function() {
                $(".cmt-noti").hide()
            }, 1e4)) : "nolength" == a.status ? ($(".cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">Ná»™i dung bĂ¬nh luáº­n quĂ¡ ngáº¯n, vui lĂ²ng thá»­ láº¡i</div></div>'), $(".cmt-noti").show(), setTimeout(function() {
                $(".cmt-noti").hide()
            }, 4e3)) : "block" == a.status ? ($(".cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">Ná»™i dung bĂ¬nh luáº­n khĂ´ng phĂ¹ há»£p hoáº·c Ä‘Ă£ bá»‹ cháº·n, vui lĂ²ng thá»­ láº¡i!</div></div>'), $(".cmt-noti").show(), setTimeout(function() {
                $(".cmt-noti").hide()
            }, 4e3)) : "blockuser" == a.status ? ($(".cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">Báº¡n Ä‘Ă£ bá»‹ ngÆ°á»i dĂ¹ng nĂ y cháº·n, báº¡n khĂ´ng thá»ƒ tráº£ lá»i bĂ¬nh luáº­n cá»§a há».</div></div>'), $(".cmt-noti").show(), setTimeout(function() {
                $(".cmt-noti").hide()
            }, 4e3)) : ($(".cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">CĂ³ lá»—i xáº£y ra vui lĂ²ng thá»­ láº¡i!</div></div>'), $(".cmt-noti").show(), setTimeout(function() {
                $(".cmt-noti").hide()
            }, 4e3))
        }
    })
}

function showFrameReplyComment(t, e, a, n) {
    $(".cmt-noti").remove(), $(".frame-reply-comments").removeClass("show"), $(".frame-reply-comments").addClass("hide"), $("#feedback_" + t + "_0").addClass("show"), $("#feedback_" + t + "_0").html('<div class="showreplycmt"><div class="cmt-noti"></div><div class="showreplycmt_name">Báº¡n Ä‘ang tráº£ lá»i: <b>' + e + '</b></div><div class="reply-grid"><div class="comment-editor"><textarea rows="2" class="content-of-comment reply-of-comment" id="cmt-content-' + t + '" placeholder="Nháº­p bĂ¬nh luáº­n" maxlength="1000" value=""></textarea></div><div id="cmt-reply" onclick="AddReplyComment(' + t + ",0,'" + e + "'," + a + ')" class="add-comment button-cmt button-cmt-rep bg-violet color-black">Tráº£ lá»i</div></div></div>')
}

function showFrameReplyCommentRep(t, e, a, n, i) {
    $(".cmt-noti").remove(), $(".frame-reply-comments").removeClass("show"), $(".frame-reply-comments").addClass("hide"), $("#feedback_" + t + "_" + e).addClass("show"), $("#feedback_" + t + "_" + e).html('<div class="showreplycmt"><div class="cmt-noti"></div><div class="showreplycmt_name">Báº¡n Ä‘ang tráº£ lá»i: <b>' + a + '</b></div><div class="reply-grid"><div class="comment-editor"><textarea rows="2" class="content-of-comment reply-of-comment" id="cmt-content-' + t + '" placeholder="Nháº­p bĂ¬nh luáº­n" maxlength="1000" value=""></textarea></div><div id="cmt-reply" onclick="AddReplyComment(' + t + "," + e + ",'" + a + "'," + n + ')" class="add-comment button-cmt button-cmt-rep bg-violet color-black">Tráº£ lá»i</div></div></div>')
}

function Favorite(t, e) {
    t == MovieID && $.ajax({
        url: "/ajax/user_favorite/" + RandomNumberString(),
        type: "post",
        dataType: "json",
        data: {
            filmid: MovieID,
            type: e
        },
        beforeSend: function(t) {
            $("#favorite").attr("disabled", "disabled"), $(".text-button-favorite").append("<img height='15' width='15' src='https://dataqq.net/theme/loading_spinner_24x24.gif' style='margin-left:10px' class='favorite-loading'/>")
        },
        success: function(t) {
            $(".favorite-loading").remove(), $("#favorite").removeAttr("disabled"), $("#count-favorite").html(t.count), "user" == t.status ? (fastlogin(), $("#favorite").html('<span onclick="Favorite(' + MovieID + ',\'add\')"><span class="text-button-favorite"><i class="fa fa-plus" aria-hidden="true"></i> Theo dĂµi</span></span>')) : "add" == t.status ? ($(".btn-c").removeClass("btn-blue"), $(".btn-c").addClass("btn-blue-low"), $("#favorite").html('<span onclick="Favorite(' + MovieID + ',\'unadd\')"><span class="text-button-favorite"><i class="fa fa-check" aria-hidden="true"></i> ÄĂ£ theo dĂµi</span></span>'), $("#count-favorite").html(t.count)) : "unadd" == t.status ? ($(".btn-c").removeClass("btn-blue-low"), $(".btn-c").addClass("btn-blue"), $("#favorite").html('<span onclick="Favorite(' + MovieID + ',\'add\')"><span class="text-button-favorite"><i class="fa fa-plus" aria-hidden="true"></i> Theo dĂµi</span></span>'), $("#count-favorite").html(t.count)) : alert("CĂ³ thá»ƒ báº¡n Ä‘Ă£ thao tĂ¡c quĂ¡ nhanh, hĂ£y cháº­m láº¡i!")
        }
    })
}

function like(t) {
    var e = $(t).data("id"),
        a = $(t).data("type");
    e && $.ajax({
        url: "/ajax/likecmt/" + RandomNumberString(),
        type: "post",
        dataType: "json",
        data: {
            cmtid: e,
            type: a
        },
        beforeSend: function() {
            $(t).html("<img height='15' width='15' src='https://dataqq.net/theme/loading_spinner_24x24.gif'/>")
        },
        success: function(a) {
            "addlike" == a.status && $(t).data("type", "unlike"), "unlike" == a.status && $(t).data("type", "like"), $(t).html(a.content), $(".cmt-like-c" + e).html(a.count)
        }
    })
}

function blockuser(t) {
    var e = $(t).data("id"),
        a = $(t).data("type");
    e && $.ajax({
        url: "/ajax/blockuser/" + RandomNumberString(),
        type: "post",
        dataType: "json",
        data: {
            blockid: e,
            type: a
        },
        beforeSend: function() {
            $(t).html("<img height='15' width='15' src='https://dataqq.net/theme/loading_spinner_24x24.gif'/>")
        },
        success: function(e) {
            "blocker" == e.status && ($(t).data("type", "unblock"), $(t).removeClass("alert-info"), $(t).addClass("alert-danger")), "unblock" == e.status && ($(t).data("type", "block"), $(t).removeClass("alert-danger"), $(t).addClass("alert-info")), $(t).html(e.content)
        }
    })
}

function buy_film(t) {
    $(t).attr("disabled", "disabled");
    var e = $(t).data("id");
    e && $.ajax({
        url: "/ajax/buy_film/" + RandomNumberString(),
        type: "post",
        dataType: "json",
        data: {
            filmid: e
        },
        beforeSend: function() {
            $(t).html("<img width='15px' height='15px' src='https://dataqq.net/theme/loading_spinner_24x24.gif'/> Ä‘ang xá»­ lĂ½...")
        },
        success: function(e) {
            "success" == e.status && ($(t).removeClass("alert-info"), $(t).addClass("alert-success"), location.reload()), $(t).html(e.content), $(t).removeAttr("disabled")
        }
    })
}

function delcmt(t) {
    var e = $(t).data("id");
    e && confirm("báº¡n muá»‘n xoĂ¡ bĂ¬nh luáº­n nĂ y?") && $.ajax({
        url: "/ajax/delcmt/" + RandomNumberString(),
        type: "post",
        dataType: "text",
        data: {
            cmtid: e
        },
        beforeSend: function() {
            $(t).html("<img height='15' width='15' src='https://dataqq.net/theme/loading_spinner_24x24.gif'/>")
        },
        success: function() {
            $(".cmt-" + e).addClass("hide")
        }
    })
}

function user_manage(t) {
    var e = $(t).data("user"),
        a = $(t).data("type"),
        n = $(t).data("cmtid");
    e && a && confirm("cĂ³ pháº£i báº¡n muá»‘n thá»±c hiá»‡n Ä‘iá»u nĂ y?") && $.ajax({
        url: "/ajax/user_manage/" + RandomNumberString(),
        type: "post",
        dataType: "text",
        data: {
            user: e,
            type: a,
            cmtid: n
        },
        beforeSend: function() {
            $(t).html("<img height='15' width='15' src='https://dataqq.net/theme/loading_spinner_24x24.gif'/>")
        },
        success: function() {
            location.reload()
        }
    })
}

function user_fastinfo(t) {
    $("#background_lamps").remove();
    var e = $(t).data("userid");
    e && $.ajax({
        url: "/ajax/user_fastinfo/" + RandomNumberString(),
        type: "post",
        dataType: "json",
        data: {
            userid: e
        },
        beforeSend: function() {
            $(".user_fastinfo").show(), $("body").append('<div id="background_lamps"></div>'), $("#fastinfo_info").html('<img src="https://dataqq.net/theme/loading_big.gif" width="150px"/>'), $("#fastinfo_main").html('<img src="https://dataqq.net/theme/loading_big.gif" width="150px"/>'), $("#fastinfo_farm").html('<img src="https://dataqq.net/theme/loading_big.gif" width="150px"/>'), $("#fastinfo_vatpham").html('<img src="https://dataqq.net/theme/loading_big.gif" width="150px"/>')
        },
        success: function(t) {
            $("#fastinfo_info").html(t.info), $("#fastinfo_main").html(t.main), $("#fastinfo_farm").html(t.farm), $("#fastinfo_vatpham").html(t.vatpham)
        }
    })
}

function close_modalzfix() {
    $("#background_lamps").remove(), $(".user_fastinfo").hide(), activeTabFastInfo($(".wrappertab_fastinfo .tab_fastinfo:first-child"))
}

function close_modal_login() {
    $("#background_lamps").remove(), $(".user_fastlogin").hide(), $(".tab_content_fastlogin").removeClass("active"), $(".tab_content_fastlogin").hide(), $("#modal-tab-login").addClass("active"), $("#modal-tab-login").show()
}

function sideuser(t) {
    var e = $(t).data("id");
    $(".user_manage_dropdown" + e).toggle()
}

function ballon(t) {
    var e = $(t).data("id");
    e && $("#ad" + e).slideToggle()
}
$(document).ready(function() {
    $("form.preform").submit(function(t) {
        t.preventDefault();
        var e = $(this);
        if ("login" == e.data("submit")) var a = {
            username: e.find('input[name="username"]').val(),
            password: e.find('input[name="password"]').val(),
            type: e.data("submit")
        };
        "register" == e.data("submit") && (a = {
            username: e.find('input[name="username"]').val(),
            password: e.find('input[name="password"]').val(),
            repassword: e.find('input[name="repassword"]').val(),
            type: e.data("submit")
        }), "forgot_password" == e.data("submit") && (a = {
            username: e.find('input[name="username"]').val(),
            password: e.find('input[name="idtelegram"]').val(),
            type: e.data("submit")
        }), $.ajax({
            type: "POST",
            dataType: "json",
            url: "/ajax/fastlogin/" + RandomNumberString(),
            data: a,
            success: function(t) {
                "success" == t.status ? location.reload() : $("#user_fastlogin_noti").html('<div class="alert alert-danger">' + t.content + "</div>")
            },
            error: function() {
                $("#user_fastlogin_noti").html('<div class="alert alert-danger">CĂ³ lá»—i xáº£y ra vui lĂ²ng thá»­ láº¡i</div>')
            }
        })
    })
}), loading = '<div class="spinner large" style="text-align: center;"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>', loadings = '<img src="/Theme/images/loading-s.gif?v1" style="width:15px!important;height:15px!important"/>', $(".tab_fastinfo").click(function() {
    return activeTabFastInfo(this), !1
}), activeTabFastInfo($(".wrappertab_fastinfo .tab_fastinfo:first-child")), $(".tab-cmt").click(function() {
    return activeTabCmt(this), !1
}), activeTabCmt($(".tab-wrapper .tabs-cmt .tab-cmt:first-child")), $(".tab_other").click(function() {
    return activeTabOther(this), !1
}), activeTabOther($(".wrappertab_other .tab_other:first-child")), $("#cmt-content").keyup(function() {
    var t = $(this).val().length;
    if (t >= 1e3) $("#charNum").text("Báº¡n chá»‰ Ä‘Æ°á»£c bĂ¬nh luáº­n tá»‘i Ä‘a 1000 kĂ­ tá»±");
    else {
        var e = t;
        $("#charNum").text(e + "/1000 kĂ­ tá»±")
    }
}), setTimeout(function() {
    load_cmt()
}, 3e1), $("#cmt-add").click(function() {
    $.ajax({
        url: "/ajax/cmt/" + RandomNumberString(),
        type: "post",
        dataType: "json",
        data: {
            filmid: MovieID,
            content: $("#cmt-content").val()
        },
        beforeSend: function() {
            $("#cmt-add").attr("disabled", "disabled"), $("#cmt-add").append("<img height='15' width='15' src='https://dataqq.net/theme/loading_spinner_24x24.gif' style='margin-left:10px' class='cmt-add-loading'/>"), $("#cmt-noti").remove(), $(".cmt-grid").append("<div id='cmt-noti' style='padding:3px 0;border-radius:3px;overflow:hidden'></div>")
        },
        success: function(t) {
            $(".cmt-add-loading").remove(), $("#cmt-add").removeAttr("disabled"), "true" == t.status ? ($("#cmt-noload-content").hide(""), $("#cmt-content").val(""), $("#charNum").html("0/1000 kĂ­ tá»±"), load_cmt()) : "new" == t.status ? ($("#cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">TĂ i khoáº£n má»›i chÆ°a thá»ƒ bĂ¬nh luáº­n. Vui lĂ²ng thá»­ láº¡i sau ' + t.time + " ná»¯a</div></div>"), setTimeout(function() {
                $("#cmt-noti").remove()
            }, 1e4)) : "limitcmt" == t.status ? ($("#cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">Báº¡n Ä‘ang spam quĂ¡ nhanh. Vui lĂ²ng thá»­ láº¡i sau ' + t.time + " ná»¯a</div></div>"), setTimeout(function() {
                $("#cmt-noti").remove()
            }, 1e4)) : "banned" == t.status ? ($("#cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">TĂ i khoáº£n cá»§a báº¡n Ä‘Ă£ bá»‹ cáº¥m bĂ¬nh luáº­n. Vui lĂ²ng thá»­ láº¡i sau ' + t.time + " ná»¯a</div></div>"), setTimeout(function() {
                $("#cmt-noti").remove()
            }, 1e4)) : "nolength" == t.status ? ($("#cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">Ná»™i dung bĂ¬nh luáº­n quĂ¡ ngáº¯n, vui lĂ²ng thá»­ láº¡i</div></div>'), $("#cmt-noti").remove(), setTimeout(function() {
                $("#cmt-noti").remove()
            }, 4e3)) : "block" == t.status ? ($("#cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">Ná»™i dung bĂ¬nh luáº­n khĂ´ng phĂ¹ há»£p hoáº·c Ä‘Ă£ bá»‹ cháº·n, vui lĂ²ng thá»­ láº¡i!</div></div>'), setTimeout(function() {
                $("#cmt-noti").remove()
            }, 4e3)) : ($("#cmt-noti").html('<div id="toast-containers"><div class="toast-error color-white">CĂ³ lá»—i xáº£y ra vui lĂ²ng thá»­ láº¡i!</div></div>'), setTimeout(function() {
                $("#cmt-noti").remove()
            }, 4e3))
        }
    })
});
var page = 1;

function NotiUser(t) {
    $.post(BASE_URL + "/ajax/noti/" + RandomNumberString(), {
        idnoti: t
    }, function(e) {
        $(".noti_" + t).remove()
    }, "text")
}

function user_update_online() {
    var t = 0;
    setInterval(function() {
        ++t % 30 == 0 && ($.post(BASE_URL + "/ajax/user_update/" + RandomNumberString(), {
            type: "online"
        }, function() {}, "json"), t = 0)
    }, 1e3)
}

function lazyload() {
    var t = document.querySelectorAll("img.lazyload");
    if ("IntersectionObserver" in window) {
        var e = new IntersectionObserver(function(t, a) {
            t.forEach(function(t) {
                if (t.isIntersecting) {
                    var a = t.target;
                    a.src = a.dataset.src, a.classList.remove("lazyload"), e.unobserve(a)
                }
            })
        });
        t.forEach(function(t) {
            e.observe(t)
        })
    } else {
        var a, n = function() {
            a && clearTimeout(a), a = setTimeout(function() {
                var e = window.pageYOffset;
                t.forEach(function(t) {
                    t.offsetTop < window.innerHeight + e && (t.src = t.dataset.src, t.classList.remove("lazyload"))
                }), 0 === t.length && (document.removeEventListener("scroll", n), window.removeEventListener("resize", n), window.removeEventListener("orientationChange", n))
            }, 20)
        };
        document.addEventListener("scroll", n), window.addEventListener("resize", n), window.addEventListener("orientationChange", n)
    }
}
$(document).ready(function() {
    $("#cmt-loadmore").click(function() {
        $element = $("#cmt-load-content"), $button = $(this), page++, $button.html(loading), $.ajax({
            type: "post",
            dataType: "text",
            url: BASE_URL + "/ajax/loadcmt/" + RandomNumberString(),
            data: {
                filmid: MovieID,
                page: page,
                limit: 0
            },
            success: function(t) {
                t = (t = t.replace(/\[\[/gi, "<span class='user-tag'>")).replace(/\]\]/gi, "</span>"), $button.html('<div class="flex-ver-center fw-700 load-more button-cmt-loadmores bg-blue">Xem thĂªm bĂ¬nh luáº­n</div>'), $element.append(t), "" === t && $button.addClass("hide")
            }
        })
    })
}), $(document).ready(function() {
    $elmnext = $(".episodelist a.active").parent().next(), $elmprev = $(".episodelist a.active").parent().prev();
    var t = $("a", $elmnext).attr("href"),
        e = $("a", $elmprev).attr("href");
    t && $("#nexttap").html('<a href="' + t + '" class="toolx-btn">Táº­p tiáº¿p <i class="fa fa-chevron-right" aria-hidden="true"></i></a>'), e && $("#prevtap").html('<a href="' + e + '" class="toolx-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i> Táº­p trÆ°á»›c</a>')
}), window.onload = function() {
    lazyload()
};