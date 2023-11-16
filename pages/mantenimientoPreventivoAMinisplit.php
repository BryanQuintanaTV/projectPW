<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/icons/formIcon.svg" type="image/x-icon">
    <title>Mantenimiento Preventivo</title>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/layout.css">
    <link rel="stylesheet" href="../styles/nav.css">
    <link rel="stylesheet" href="../styles/formulario.css">
    <link rel="stylesheet" href="../styles/footer.css">
</head>

<body>

    <section class="layout">
        <div class="header">
            <?php include '../components/nav.html'; ?>
        </div>
        <div class="main">

            <div class="container">
                <form>
                    <h1>Mantenimiento Preventivo A Equipos De Refrigeración</h1>

                    <div class="form-group">
                        <select>
                            <option>Value 1</option>
                            <option>Value 2</option>
                        </select>
                        <label for="selectNoSerie" class="control-label">Equipo (No. De Serie)</label><i class="bar"></i>
                    </div>

                    <div class="form-group">
                        <select>
                            <option>Value 1</option>
                            <option>Value 2</option>
                        </select>
                        <label for="selectEdificio" class="control-label">Edificio</label><i class="bar"></i>
                    </div>

                    <div class="form-group">
                        <select>
                            <option>Value 1</option>
                            <option>Value 2</option>
                        </select>
                        <label for="selectAula" class="control-label">Aula/Oficina</label><i class="bar"></i>
                    </div>


                    <div class="form-radio">
                        <label for="">Limpieza de filtros</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="filtros" checked="checked" /><i class="helper"></i>Si
                            </label>

                            <label>
                                <input type="radio" name="filtros" /><i class="helper"></i>No
                            </label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <label for="">Limpieza De Drenes</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="dren" checked="checked" /><i class="helper"></i>Si
                            </label>

                            <label>
                                <input type="radio" name="dren" /><i class="helper"></i>No
                            </label>
                        </div>
                    </div>

                    <div class="form-radio">
                        <label>Limpieza de Serpentines</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="serp" checked="checked" /><i class="helper"></i>Si
                            </label>

                            <label>
                                <input type="radio" name="serp" /><i class="helper"></i>No
                            </label>
                        </div>
                    </div>

                    <p>Checar presiones</p>
                    <div class="form-group">
                        <input type="text" required="required" />
                        <label for="input" class="control-label">Alta</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" required="required" />
                        <label for="input" class="control-label">Baja</label><i class="bar"></i>
                    </div>

                    <div class="form-group">
                        <textarea required="required"></textarea>
                        <label for="textarea" class="control-label">Observaciones</label><i class="bar"></i>
                    </div>
                    <div class="button-container">
                        <button type="sumbit" class="button"><span>Submit</span></button>
                    </div>
                </form>

            </div>


        </div>
        <div class="footer">
            <?php include '../components/footer.html' ?>
        </div>
    </section>

</body>

</html>