
var horas = {
    "09:00": "09:30",
    "09:45": "10:15",
    "10:30": "11:00",
    "11:15": "11:45",
    "13:30": "14:00",
    "14:15": "14:45",
    "15:00": "15:30",
    "15:45": "16:15"
};

document.getElementById("dataConsulta").addEventListener("change", (event) => {
    console.log(event);

    $.ajax({
        url: `consultas-datas.php?data=${event.target.value}`,
        success: (result) => {
            console.log(result)

            let options = ``

            console.log(typeof (result))

            if (typeof (result) == "object") {
                console.log("é uma array.")

                for (h of Object.keys(horas)) {
                    let timeEnd = horas[h]

                    let disabled = "";
                    let htmlClass = `btn btn-outline-primary`

                    for (r of result) {
                        if (r == h) {
                            disabled = "disabled"
                            htmlClass = "btn btn-danger"
                            break
                        }
                    }

                    options += `<div class="col-sm-4">
                        <input type="radio" name="options" class="btn-check" id="option8"
                            autocomplete="off" value="${h}:00" ${disabled}>
                        <label class="${htmlClass}" for="option8">${h} - ${timeEnd}</label>
                    </div>`
                }
            }

            document.querySelector(".options-data").innerHTML = options;
        }
    })
})

changeData = () => {
    {/* <div class="col-sm-4">
    <input type="radio" name="options" class="btn-check" id="option1"
        autocomplete="off" value="09:00:00" <?php if(isset($obj['09:00'])){ echo 'disabled'; } ?>>
    <label <?php if(isset($obj['09:00'])){ echo 'class="btn btn-danger"'; } else { echo 'class="btn btn-outline-primary"'; } ?> for="option1">09:00 - 09:30</label>
</div>

<div class="col-sm-4">
    <input type="radio" name="options" class="btn-check" id="option2"
        autocomplete="off" value="09:45:00" <?php if(isset($obj['09:45'])){ echo 'disabled'; } ?>>
    <label <?php if(isset($obj['09:45'])){ echo 'class="btn btn-danger"'; } else { echo 'class="btn btn-outline-primary"'; } ?> for="option2">09:45 - 10:15</label>
</div>

<div class="col-sm-4">
    <input type="radio" name="options" class="btn-check" id="option3"
        autocomplete="off" value="10:30:00" <?php if(isset($obj['10:30'])){ echo 'disabled'; } ?>>
    <label <?php if(isset($obj['10:30'])){ echo 'class="btn btn-danger"'; } else { echo 'class="btn btn-outline-primary"'; } ?> for="option3">10:30 - 11:00</label>
</div>

<div class="col-sm-4">
    <input type="radio" name="options" class="btn-check" id="option4"
        autocomplete="off" value="11:15:00" <?php if(isset($obj['11:15'])){ echo 'disabled'; } ?>>
    <label <?php if(isset($obj['11:15'])){ echo 'class="btn btn-danger"'; } else { echo 'class="btn btn-outline-primary"'; } ?> for="option4">11:15 - 11:45</label>
</div>

<div class="col-sm-4">
    <input type="radio" name="options" class="btn-check" id="option5"
        autocomplete="off" value="13:30:00" <?php if(isset($obj['13:30'])){ echo 'disabled'; } ?>>
    <label <?php if(isset($obj['13:30'])){ echo 'class="btn btn-danger"'; } else { echo 'class="btn btn-outline-primary"'; } ?> for="option5">13:30 - 14:00</label>
</div>

<div class="col-sm-4">
    <input type="radio" name="options" class="btn-check" id="option6"
        autocomplete="off" value="14:15:00" <?php if(isset($obj['14:15'])){ echo 'disabled'; } ?>>
    <label <?php if(isset($obj['14:15'])){ echo 'class="btn btn-danger"'; } else { echo 'class="btn btn-outline-primary"'; } ?> for="option6">14:15 - 14:45</label>
</div>

<div class="col-sm-4">
    <input type="radio" name="options" class="btn-check" id="option7"
        autocomplete="off" value="15:00:00" <?php if(isset($obj['15:00'])){ echo 'disabled'; } ?>>
    <label <?php if(isset($obj['15:00'])){ echo 'class="btn btn-danger"'; } else { echo 'class="btn btn-outline-primary"'; } ?> for="option7">15:00 - 15:30</label>
</div>

<div class="col-sm-4">
    <input type="radio" name="options" class="btn-check" id="option8"
        autocomplete="off" value="15:45:00" <?php if(isset($obj['15:45'])){ echo 'disabled'; } ?>>
    <label <?php if(isset($obj['15:45'])){ echo 'class="btn btn-danger"'; } else { echo 'class="btn btn-outline-primary"'; } ?> for="option8">15:45 - 16:15</label>
</div> */}
}