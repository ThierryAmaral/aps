
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
    console.log(event.target.value);

    let split = event.target.value.split("-")

    console.log(parseInt(split[0]))

    if(parseInt(split[0]) < 2000){
        return;
    }

    $.ajax({
        url: `consultas-datas.php?data=${event.target.value}`,
        success: (result) => {
            console.log(result)

            let options = ``

            console.log(typeof (result))

            if (typeof (result) == "object") {
                console.log("é uma array.")

                let count = 0;
                for (h of Object.keys(horas)) {
                    let timeEnd = horas[h]
                    count += 1;

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
                        <input type="radio" name="options" class="btn-check" id="option${count}"
                            autocomplete="off" value="${h}:00" ${disabled}>
                        <label class="${htmlClass}" for="option${count}">${h} - ${timeEnd}</label>
                    </div>`
                }
            }

            document.querySelector(".options-data").innerHTML = options;
        }
    })
})