        document.addEventListener('DOMContentLoaded', function () {
            const ingredientesInput = document.querySelector('#ingredientesInput');
            const pasosInput = document.querySelector('#pasosInput');

            ingredientesInput.addEventListener('click', function (event) {
                if (event.target.classList.contains('addInput')) {
                    const newInputGroup = document.createElement('div');
                    newInputGroup.className = 'input-group mb-3';
                    newInputGroup.innerHTML = `
                        <input size="40" class="form-control me-3" placeholder="Por ejemplo, Huevo" value="" type="text" name="ingrediente[]">
                        <input size="40" class="form-control me-3" placeholder="Por ejemplo: 1" value="" type="text" name="quantidade[]"> 
                        <div class="input-group-append">
                            <button type="button" class="btn btn-danger me-3 removeInput">-</button>
                        </div>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary me-3 addInput">+</button>
                        </div>
                    `;
                    ingredientesInput.appendChild(newInputGroup);
                } else if (event.target.classList.contains('removeInput')) {
                    event.target.parentNode.parentNode.remove();
                }
            });

            pasosInput.addEventListener('click', function (event) {
                if (event.target.classList.contains('addInput')) {
                    const newInputGroup = document.createElement('div');
                    newInputGroup.className = 'input-group mb-3';
                    newInputGroup.innerHTML = `
                        <textarea class="form-control me-3" rows="2" placeholder="Por ejemplo, 2. Abrir y batir los huevos" name="pasos[]"></textarea>   
                        <div class="input-group-append">
                            <button type="button" class="btn btn-danger me-3 removeInput">-</button>
                        </div>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary me-3 addInput">+</button>
                        </div>
                    `;
                    pasosInput.appendChild(newInputGroup);
                } else if (event.target.classList.contains('removeInput')) {
                    event.target.parentNode.parentNode.remove();
                }
            });
        });
