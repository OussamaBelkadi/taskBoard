let select = document.getElementById('select');
let formultiple = document.getElementById('miltipleform');

select.addEventListener('change', ()=>{
    let i=1;
    let num = Number(select.value);
    formultiple.innerHTML = '';

    while(i<=num){
            formultiple.innerHTML += `
            <div class="form-group">
            <h2 class="h1">Add task</div>
                <label class="form-label" for="namelist">Enter your date</label>
                <input class="form-control" type="date" name="date${i}">
                <label class="form-label" for="namelist">Enter your task</label>
                  <textarea class="form-control" id="content" name="content${i}" rows="3" required placeholder="Enter your description"></textarea>
            </div>`
            i++;
    }
    
    
})


const draggables = document.querySelectorAll('.draggable');
const container = document.querySelectorAll('.card');

draggables.forEach(draggable =>{
        draggable.addEventListener('dragstart', () =>{
        draggable.classList.add('dragging');
    })
        draggable.addEventListener('dragend', ()=>{
        draggable.classList.remove('dragging');
    })
})
container.forEach(container => {
    container.addEventListener('dragover', ()=>{
        const draggable = document.querySelector('.dragging');
        container.appendChild(draggable);
    })
})

const search = document.getElementById('search');
const body = document.querySelectorAll(".desc");
const autherbody = document.getElementsByClassName("desc");
search.addEventListener('input', (event)=>{
    const va = event.target.value;
    
   
    body.forEach(body=>{
        if (body.textContent === va) {
            body.parentElement.style.display= 'block';
            
        }else{
            
            body.style.display = "none";
            console.log('s');
        }
    });
    
})
