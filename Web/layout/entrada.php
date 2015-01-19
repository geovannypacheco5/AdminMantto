<section id="entrada">
    <form id="form_cliente">
        <fieldset id="fieldset_cliente" class="columnas">
            <legend>Datos cliente</legend>
            <table>
                <tr>
                    <td>
                        <label>Nombre: </label>
                    </td>
                    <td>
                        <input type="text" placeholder="introduzca nombre"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Apellido: </label>
                    </td>
                    <td>
                        <input type="text" placeholder="introduzca apellido"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Telefono: </label>
                    </td>
                    <td>
                        <input type="number" placeholder="55-555-555"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email: </label>
                    </td>
                    <td>
                        <input type="email" placeholder="cliente@gmail.com"/>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset id="fieldset_equipo" class="columnas">
            <legend>Datos equipo</legend>
            <table>
                <tr>
                    <td>
                        <label>Fecha entrada: </label>
                    </td>
                    <td>
                        <input type="date" placeholder="dd/mm/aaaa"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tipo: </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="tipo" value="comercial" /><label>Comercial</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="tipo" value="ensamblado"/><label>Ensamblado</label>
                    </td>
                </tr>
                <tr class="tipo comercial">
                    <td>
                        <label>Marca: </label>
                    </td>
                    <td>
                        <input type="text" placeholder="introduzca marca" />
                    </td>
                </tr>
                <tr class="tipo comercial">
                    <td>
                        <label>Modelo: </label>
                    </td>
                    <td>
                        <input type="text" placeholder="introduzca modelo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Fecha salida: </label>
                    </td>
                    <td>
                        <input type="date" placeholder="dd/mm/aaaa"/>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset id="fieldset_equipo" class="columnas">
            <legend>Prueba: </legend>
            <table>
                <tr>
                    <td>
                        <label>prueba: </label>
                    </td>
                    <td>
                        <input type="text" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>prueba: </label>                        
                    </td>
                    <td>
                        <input type="text" />                        
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset id="fieldset_equipo" class="columnas">
            <legend>Prueba2: </legend>
            <table>
                <tr>
                    <td>
                        <label>prueba: </label>
                    </td>
                    <td>
                        <input type="text" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>prueba: </label>                        
                    </td>
                    <td>
                        <input type="text" />                        
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</section>