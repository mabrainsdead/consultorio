<html>
<form action="{{route('cont_sangue')}}" method="post">@csrf
    <div> <h4>Analises gerais </h4>
        <input type="checkbox" name="lab[]" value="Hemograma">Hemograma <br>
        <input type="checkbox" name="lab[]" value="Glicemia de Jejum">Glicemia <br>
        <input type="checkbox" name="lab[]" value="Hemoblobina Glicada">HbA1C <br>
        <input type="checkbox" name="lab[]" value="Ácido Urico">Ac. Urico<br>
        <input type="checkbox" name="lab[]" value="Colesterol total, fracoes e triglicerídeos">col<br>
        <input type="checkbox" name="lab[]" value="TSH e T4L">TSH e T4L<br>
        <input type="checkbox" name="lab[]" value="TGO, TGP, Gama GT, fosfatase alcalina">TGO, TGP, GAMA GT E FOSFATASE ALCALINA<br>
        <input type="checkbox" name="lab[]" value="Bilirrubinas">Bilirrubinas<br>
        <input type="checkbox" name="lab[]" value="Coagulograma">Coagulograma<br>
        <input type="checkbox" name="lab[]" value="Cálcio total e ionizado">Calcio<br>
        <input type="checkbox" name="lab[]" value="Fósforo plasmatico">Fosforo plasma<br>
        <input type="checkbox" name="lab[]" value="Vitamina d3 e vitamina b12">Vit D e b12<br>
        <input type="checkbox" name="lab[]" value="Magnésio">Mg<br>
        <input type="checkbox" name="lab[]" value="Proteina C reativa">PCR<br>
        <input type="checkbox" name="lab[]" value="Fator reumatoide">Fator reumatoide<br>
        <input type="checkbox" name="lab[]" value="VHS">VHS<br>
        <input type="checkbox" name="lab[]" value="Alfa 1 Glicoproteina">A1Glico<br>
        <input type="checkbox" name="lab[]" value="FAN">FAN<br>
        <input type="checkbox" name="lab[]" value="Ureia e creatinina">Ur e Cre<br>
        <input type="checkbox" name="lab[]" value="Urina tipo I e urocultura">URINa<br>
        <input type="checkbox" name="lab[]" value="CPK">CPK<br>
        <input type="checkbox" name="lab[]" value="PTH">PTH<br>
        <input type="checkbox" name="lab[]" value="Amilase e Lipase">Amilase e lipase<br>
        <input type="checkbox" name="lab[]" value="Cortisol">Cortisol<br>
        <input type="checkbox" name="lab[]" value="FSH, LH, Prolactina, Testoterona total e livre, Estradiol">FSH, LH, Prolactina, testo, e2<br>
        <input type="checkbox" name="lab[]" value="Ferro e ferritina">Ferro e ferritina<br>

    </div>

    <div>
        <h4>Perfil Masculino</h4>
        <input type="checkbox" name="lab[]" value="PSA total e livre">PSA<br>
    </div>

    <div>
        <h4>Coagulacao</h4>
        <input type="checkbox" name="lab[]" value="TTPA">TTPA<br>
        <input type="checkbox" name="lab[]" value="Tempo de protrombina">Protrombina<br>
        <input type="checkbox" name="lab[]" value="Tempo de trombina">Trombina<br>
        <input type="checkbox" name="lab[]" value="Fibrinogenio">Fibrinogenio<br>
        <input type="checkbox" name="lab[]" value="Atividade da Proteína C da coagulacao">Atividade Ptn C coag<br>
        <input type="checkbox" name="lab[]" value="Atividade da Proteina S livre">Ptn S livre<br>
        <input type="checkbox" name="lab[]" value="Anti trombina III">ATIII<br>
        <input type="checkbox" name="lab[]" value="Fator V de Leiden e Mutacao de protrombina">Fator V e Mutacao prot<br>
        <input type="checkbox" name="lab[]" value="Anticorpos Anti Cardiolipina">Anti-cardiolipina<br>
        <input type="checkbox" name="lab[]" value="Teste de funcao plaquetaria">Funcao plaquetaria<br>
        <input type="checkbox" name="lab[]" value="Dosagem de fator VIII">Fator VIII<br>



    </div>

    <div>
        <h4>Fezes</h4>
        <input type="checkbox" name="lab[]" value="Enterovírus por PCR">Enterovírus por PCR<br>
        <input type="checkbox" name="lab[]" value="Elastase pancreática">Elastase pancreática<br>
        <input type="checkbox" name="lab[]" value="Pesquisa de antígenos e trofozoítos de Entamoeba histolytica"> Pesquisa de antígenos e trofozoítos de Entamoeba histolytica <br>
        <input type="checkbox" name="lab[]" value="Pesquisa de Eosinófilos">Pesquisa de Eosinófilos  <br>
        <input type="checkbox" name="lab[]" value="Pesquisa de antígeno de Giardia lamblia">Pesquisa de antígeno de Giardia lamblia<br>
        <input type="checkbox" name="lab[]" value="Alfa-1 Antitripsina">Alfa-1 Antitripsina <br>
        <input type="checkbox" name="lab[]" value="Dosagem de Calprotectina">Dosagem de Calprotectina<br>
        <input type="checkbox" name="lab[]" value="Pesquisa do DNA de Clostridium difficile toxigênico" >Pesquisa do DNA de Clostridium difficile toxigênico <br>
        <input type="checkbox" name="lab[]" value="Cultura de Clostridium difficile com teste de toxigenicidade">Cultura de Clostridium difficile com teste de toxigenicidade <br>
        <input type="checkbox" name="lab[]" value="Pesquisa de toxinas A e B de Clostridium difficile">Pesquisa de toxinas A e B de Clostridium difficile <br>
        <input type="checkbox" name="lab[]" value="Pesquisa de Cryptosporidium spp e Coccídios">Pesquisa de Cryptosporidium spp e Coccídios <br>
        <input type="checkbox" name="lab[]" value="Pesquisa de Coli Patogênico">Pesquisa de Coli Patogênico<br>
        <input type="checkbox" name="lab[]" value="EnAntígeno de Cryptosporidium">Antígeno de Cryptosporidium<br>
        <input type="checkbox" name="lab[]" value="Cultura de fezes">Cultura de fezes<br>
        <input type="checkbox" name="lab[]" value="Dosagem de Gordura nas fezes">Dosagem de Gordura nas fezes <br>
        <input type="checkbox" name="lab[]" value="Pesquisa de gordura nas fezes">Pesquisa de gordura nas fezes<br>
        <input type="checkbox" name="lab[]" value="Antígeno de Helicobacter pylori">Antígeno de Helicobacter pylori<br>
        <input type="checkbox" name="lab[]" value="Hemácias e Leucócitos">Hemácias e Leucócitos<br>
        <input type="checkbox" name="lab[]" value="Microsporidia">Microsporidia<br>
        <input type="checkbox" name="lab[]" value="Parasitológico">Parasitológico<br>
        <input type="checkbox" name="lab[]" value="Parasitológico">Parasitológico orovírus<br>
        <input type="checkbox" name="lab[]" value="Pesquisa de Rotavírus e Adenovírus">Pesquisa de Rotavírus e Adenovírus <br>
        <input type="checkbox" name="lab[]" value="pH">pH <br>
        <input type="checkbox" name="lab[]" value="Sangue oculto">Sangue oculto<br>
        <input type="checkbox" name="lab[]" value="Substâncias redutoras">Substâncias redutoras<br>
        <input type="checkbox" name="lab[]" value="Tamisação">Tamisação <br>
        <input type="checkbox" name="lab[]" value="Tripsina">Tripsina <br>
    </div>

    <input type="submit" value="submit">

</form>


</html>
