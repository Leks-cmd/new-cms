<body>

    <h3>
        <a href="<?php echo $_SESSION['home'] ?>" tittle="Inicio">Inicio</a> <span>| Contacto</span>
    </h3>

    <h2>Contacta con la comunidad más grande de Potterheads</h2>

    <form id="empregoForm" action="procesar.php" method="POST" novalidate>
        <div class="col s12">
            <!-- Campo do nome -->
            <div class="form-group input-field col s12">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <div class="error" id="nomeError"></div>
            </div>
            <!-- Campo do apelido -->
            <div class="form-group input-field col s12">
                <label for="apelidos">Apelidos:</label>
                <input type="text" name="apelidos" id="apelidos" required>
                <div class="error" id="apelidosError"></div>
            </div>
            <!-- Campo do email -->
            <div class="form-group input-field col s12">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
                <div class="error" id="emailError"></div>
            </div>
            <!-- Campo nivel de estudos -->
            <div class="form-group">
                <label for="estudos">Que casa prefieres:</label>
                <select name="estudos" id="estudos" required>
                    <option value="">-- Selecciona</option>
                    <option value="gryffindor">Gryffindor</option>
                    <option value="hufflepuff">Hufflepuff</option>
                    <option value="ravenclaw">Ravenclaw</option>
                    <option value="slytherin">Slytherin</option>
                    <option value="mortifago">Mortífago</option>
                </select>
                <div class="error" id="estudosError"></div>
            </div>
            <!-- Resumen biográfico -->
            <div class="form-group input-field col s12">
                <label for="resumo">Cuentanos de ti</label>
                <textarea class="materialize-textarea" name="resumo" id="resumo" required></textarea>
                <div class="error" id="resumoError"></div>
            </div>

            <div class="form-group">
                <button class="btn waves-effect waves-light" type="submit">Enviar solicitude</button>
            </div>
        </div>
    </form>


</body>