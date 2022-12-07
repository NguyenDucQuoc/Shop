const checkAll = document.getElementsByClassName('check-all')[0]
const allIndividualCheckBoxes = document.getElementsByClassName('check-individual')
const goToPayBtn = document.getElementsByClassName("container__go-to-pay-btn")[0]

checkAll.onchange = function() {
    if(checkAll.checked == 1) {
        for(let i = 0; i < allIndividualCheckBoxes.length; i++) {
            allIndividualCheckBoxes[i].checked = true
        }
    }else {
        for(let i = 0; i < allIndividualCheckBoxes.length; i++) {
            allIndividualCheckBoxes[i].checked = false
        }
    }
}


goToPayBtn.onclick = function() {
    console.log("Thanh toán thành công!")
}

