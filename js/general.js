
function throwNewMessage(id, message, user) {

  const list = document.getElementById(id)
  const element = document.createElement("li");
  element.classList.add("message-chat");
  element.innerHTML = '<p>'+message+'</p>';

  list.appendChild(element);

}