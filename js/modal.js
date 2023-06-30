const button = document.querySelector(".btn_click_inscricao")
const modal = document.querySelector(".modal_inscricao")
const buttonClose = document.querySelector(".fecharClick")

button.onclick = function () {
    modal.showModal()
}

const button2 = document.querySelector(".btn_click_participando")
const modal2 = document.querySelector(".modal_participando")
const buttonClose2 = document.querySelector(".fecharClickparticipando")

button2.onclick = function () {
    modal2.showModal()
}
