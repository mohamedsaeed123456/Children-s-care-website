function notiModal(content) {
  $("#notiBody").html(content);
  $("#notiModal").modal("show");
}

// ITEMS FUNCTIONS
function money_item(type, value, why, date, time) {
  var icon, color, typeView;
  switch (type) {
    case "ban":
      icon = "ban";
      color = "danger";
      typeView = "Ø±Ù‡Ù†";
      break;
    case "unabn":
      icon = "ban";
      color = "success";
      typeView = "ÙÙƒ Ø±Ù‡Ù†";
      break;
    case "plus":
      icon = "plus";
      color = "success";
      typeView = "Ø¥Ø¶Ø§ÙØ©";
      break;
    case "mins":
      icon = "mins";
      color = "danger";
      typeView = "Ø®ØµÙ…";
      break;
    default:
      break;
  }
  var MoneyItem = `<tr>
      <td>
          <i class="fas fa-${icon} text-${color} ml-1"></i> ${typeView}
      </td>
      <td>${value} Ø¬.Ù…</td>
      <td>
          ${why}
      </td>
      <td>${date}</td>
      <td>${time}</td>
    </tr>`;
  return MoneyItem;
}
function purches_item(id, title, sellerName, status, price, end, warranty) {
  var purchesItem = `<div class="purches-item p-2">
      <a href="order.php?id=${id}" class="lead text-dark font-weight-bold">${title}</a>
      <table class="table table-borderless">
          <tr>
              <td>Ø§Ù„Ø¨Ø§Ø¦Ø¹: <br>${sellerName}</td>
              <td>Ø§Ù„Ø­Ø§Ù„Ø©: <br>${status}</td>
              <td>Ø§Ù„ØªÙƒÙ„ÙØ©: <br> ${price} Ø¬.Ù…</td>
              <td>Ù…ÙŠØ¹Ø§Ø¯ Ø§Ù„ØªØ³Ù„ÙŠÙ…: <br>${end}</td>
              <td>Ù†Ù‡Ø§ÙŠØ© Ø§Ù„Ø¶Ù…Ø§Ù†: <br>${warranty}</td>
          </tr>
      </table>
    </div>`;
  return purchesItem;
}
function sales_item(
  id,
  title,
  buyerName,
  status,
  price,
  sellerVal,
  end,
  warranty
) {
  var salesItem = `<div class="sales-item p-2">
      <a href="order.php?id=${id}" class="lead text-dark font-weight-bold">${title}</a>
      <table class="table table-borderless">
          <tr>
              <td>Ø§Ù„Ù…Ø´ØªØ±ÙŠ: <br>${buyerName}</td>
              <td>Ø§Ù„Ø­Ø§Ù„Ø©: <br>${status}</td>
              <td>Ø§Ù„ØªÙƒÙ„ÙØ©: <br> ${price} Ø¬.Ù… (${sellerVal} Ø¬.Ù…)</td>
              <td>Ù…ÙŠØ¹Ø§Ø¯ Ø§Ù„ØªØ³Ù„ÙŠÙ…: <br> ${end}</td>
              <td>Ù†Ù‡Ø§ÙŠØ© Ø§Ù„Ø¶Ù…Ø§Ù†: <br>${warranty}</td>
          </tr>
      </table>
    </div>`;
  return salesItem;
}
function attachment_item(oldName, newName) {
  var item = `<a href="../attachments/${newName}" class="btn btn-sm btn-outline-secondary mb-3">
          <i class="fas fa-file ml-2"></i>
          ${oldName}
      </a>`;
  return item;
}
function sendMessage(type, forId, newMessage) {
  if (!newMessage || !forId) {
    notiModal(
      `<i class="fas fa-times text-danger ml-2"></i> ÙŠØ¬Ø¨ Ø¥Ø¯Ø®Ø§Ù„ Ø§ÙØ© Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª`
    );
  } else {
    $.post(
      "../inc/run.php",
      {
        target: "new-message",
        type: type,
        for_id: forId,
        new_message: newMessage,
      },
      (data) => {
        var data = JSON.parse(data);
        if (data.error) {
          notiModal(data.message);
        } else {
          var item = `<div class="messages-item">
            <div class="container">
                <div class="user-area text-center">
                    <span class="fa-stack fa-2x d-block mb-2">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-user fa-stack fa-1x fa-inverse"></i>
                    </span>
                    ${data.sender_name} <br>
                    (${data.sender})
                </div>
                <div class="message-area">
                    <p class="message">
                        ${data.mess}
                    </p>
                    <span class="message-details text-dark">
                        <i class="fas fa-calendar-alt ml-1"></i>
                        Ø§Ù„ØªØ§Ø±ÙŠØ®:
                        ${data.date}
                        <i class="fas fa-clock ml-1"></i>
                        Ø§Ù„ÙˆÙ‚Øª:
                        ${data.time}
                    </span>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>`;
          return item;
        }
      }
    );
  }
}
function inboxMessage(title, sender, message, date, email, phone) {
  var item = `<table class="table">
                <tr>
                    <th>Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø±Ø³Ø§Ù„Ø©:</th>
                    <td>${title}</td>
                </tr>
                <tr>
                    <th>Ø§Ù„Ù…Ø±Ø³Ù„:</th>
                    <td>${sender}</td>
                </tr>
                <tr>
                    <th>Ø§Ù„Ø¨Ø±ÙŠØ¯ Ø§Ù„Ø¥Ù„ÙƒØªØ±ÙˆÙ†ÙŠ:</th>
                    <td>${email}</td>
                </tr>
                <tr>
                    <th>Ø±Ù‚Ù… Ø§Ù„Ù‡Ø§ØªÙ:</th>
                    <td>${phone}</td>
                </tr>
                <tr>
                    <th>Ø§Ù„Ø±Ø³Ø§Ù„Ø©:</th>
                    <td>${message}</td>
                </tr>
                <tr>
                    <th>ØªØ§Ø±ÙŠØ® ÙˆÙ…ÙˆØ¹Ø¯ Ø§Ù„Ø±Ø³Ø§Ù„Ø©:</th>
                    <td>${date}</td>
                </tr>
              </table>`;
  return item;
}
$(function () {
  $("#logout").click(function () {
    $.post("../inc/run.php", { target: "logout" }, () => {
      window.location.href = "../login.php";
    });
  });
});

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
function financeProcessModal(code, name, phone, type, value, reason, date, hour) {
  var item = `<table class="table">
                <tr>
                    <th>ÙƒÙˆØ¯ Ø§Ù„Ø¹Ù…Ù„ÙŠØ©:</th>
                    <td>${code}</td>
                </tr>
                <tr>
                    <th>Ø¥Ø³Ù… Ø§Ù„Ø¹Ù…ÙŠÙ„:</th>
                    <td>${name}</td>
                </tr>
                <tr>
                    <th>Ø±Ù‚Ù… Ø§Ù„Ù‡Ø§ØªÙ:</th>
                    <td>${phone}</td>
                </tr>
                <tr>
                    <th>Ù†ÙˆØ¹ Ø§Ù„Ø¹Ù…Ù„ÙŠØ©:</th>
                    <td>${type}</td>
                </tr>
                <tr>
                    <th>Ù‚ÙŠÙ…Ø© Ø§Ù„Ø¹Ù…Ù„ÙŠØ©:</th>
                    <td>${value}</td>
                </tr>
                <tr>
                    <th>Ø³Ø¨Ø¨ Ø§Ù„Ø¹Ù…Ù„ÙŠØ©:</th>
                    <td>${reason}</td>
                </tr>
                <tr>
                    <th>ØªØ§Ø±ÙŠØ® ÙˆÙ…ÙˆØ¹Ø¯ Ø§Ù„Ø¹Ù…Ù„ÙŠØ©:</th>
                    <td>${date}   -   ${hour}</td>
                </tr>
              </table>`;
  return item;
}
if (getCookie("accept_cookie") == "") {
  $("body").append(`
            <div class="cookie">
                <div class="container">
                    ÙŠØ³ØªØ®Ø¯Ù… Ø§Ù„Ù…ÙˆÙ‚Ø¹ Ù…Ù„ÙØ§Øª ØªØ¹Ø±ÙŠÙ Ø§Ù„Ø¥Ø±ØªØ¨Ø§Ø· Ù„ØªÙˆÙÙŠØ± Ø£ÙØ¶Ù„ ØªØ¬Ø±Ø¨Ø© Ø¥Ø³ØªØ®Ø¯Ø§Ù… Ù…Ù…ÙƒÙ†Ø©
                    <button class="btn btn-success btn-sm ml-2 mr-2" id="acceptCookie" type="button">Ø£ÙˆØ§ÙÙ‚</button>
                    <button class="btn btn-danger btn-sm ml-2 mr-2" id="refuseCookie" type="button">Ù„Ø§ Ø£ÙˆØ§ÙÙ‚</button>
                    (Ù„Ù† ØªØ¸Ù‡Ø± Ù‡Ø°Ù‡ Ø§Ù„Ø±Ø³Ø§Ù„Ø© Ù…Ø¬Ø¯Ø¯Ø§ Ø¨Ù…Ø¬Ø±Ø¯ Ù…ÙˆØ§ÙÙ‚ØªÙƒ Ø¹Ù„ÙŠÙ‡Ø§ Ù„Ù…Ø±Ø© ÙˆØ§Ø­Ø¯Ø© ÙÙ‚Ø·)
                </div>
            </div>`);

  $("#refuseCookie").click(() => {
    if (confirm("Ù‡Ù„ Ø£Ù†Øª Ù…ØªØ£ÙƒØ¯ Ù…Ù† Ù‚Ø±Ø§Ø±Ùƒ Ø¨Ø¹Ø¯Ù… Ø§Ù„Ù…ÙˆØ§ÙÙ‚Ø© Ø¹Ù„Ù‰ Ø¥Ø³ØªØ®Ø¯Ø§Ù…Ù†Ø§ Ù…Ù„ÙØ§Øª ØªØ¹Ø±ÙŠÙ Ø§Ù„Ø¥Ø±ØªØ¨Ø§Ø· ÙˆØªØ±ÙŠØ¯ Ù…ØºØ§Ø¯Ø±Ø© Ø§Ù„Ù…ÙˆÙ‚Ø¹ØŸ")) {
      close();
    }
  });
  $("#acceptCookie").click(function(){
    setCookie("accept_cookie", "yes", 1000);
    $(this).parent().parent().slideDown(500).remove();
  })
}
