<html>
<form action="{{route('cont_imagem_met_graf')}}" method="post">@csrf
    <div> <h4>Analises gerais </h4>
        <input type="checkbox" name="img[]" value="Teste ergométrico em esteira">Teste erg<br>
        <input type="checkbox" name="img[]" value="Cintilografia de perfusao miocardioca MIBI-DIPIRIDAMOL">CINTILOGRAFIA MIBI-DIPI<br>
        <input type="checkbox" name="img[]" value="MAPA-24h">Mapa<br>
        <input type="checkbox" name="img[]" value="Holter-24h">Holter<br>
        <input type="checkbox" name="img[]" value="Cintilografia de perfusao miocardica MIBI-esforço">MIBI-esforco<br>
        <input type="checkbox" name="img[]" value="US de abdome total">US abdome<br>
        <input type="checkbox" name="img[]" value="Ultrassonografia de Pescoço">US pescoco <br>
        <input type="checkbox" name="img[]" value="Doppler de carótidas">Carotidas <br>
        <input type="checkbox" name="img[]" value="Tomografia de tórax sem contraste para avaliação de escore de cálcio coronário">Escore de calcio <br>
        <input type="checkbox" name="img[]" value="Ecocardiograma bidimensional com Doppler Colorido">eco 2d
    </div><br>



    <input type="submit" value="submit">

</form>


</html>
