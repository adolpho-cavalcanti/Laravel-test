<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitantes</title>
</head>
<body>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    <form action="{{url('visitantes/salvar')}}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome" >
        <label>Telefone</label>
        <input type="text" name="telefone" placeholder="Telefone" >
        <label>Data:</label>
        <input type="date" name="data" id="data" >
        <label>Horário:</label>
        <input type="time" name="time" id="hora" >
        <button type="submit" name="btn-agendar" id="btn-agendar" onclick="dateTime()">Enviar</button>
    </form>
    <script type="text/javascript">

function dateTime() {
  //atribui a variável data o valor do input cujo id = data
  var data = document.getElementById('data').value;
  //atribui a variável hora o valor do input cujo id = hora
  var hora = document.getElementById('hora').value;
  //concatena as duas variaveis separadas por espaço e joga no value do input cujo id = btn-agendar
  document.getElementById('btn-agendar').value=data+ " " + hora;
}

</script>
</body>
</html>
