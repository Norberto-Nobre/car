
@extends('layouts.base')

@section('content')
    <!-- About-area start -->
    <section class="container-fluid bg-breadcrumb-3">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-6 mb-4 wow fadeInDown" data-wow-delay="0.1s">Termos & Políticas</h4>
            <div class="txt-block text-center white">
                <a href="{{route('front.index')}}">Home </a>
                <i class="fa-solid fs-6 fa-greater-than"></i>
                <a href="{{route('front.contacto')}}">Termos & Políticas</a>
            </div>
        </div>
    </section>
    <!-- About-area start  end -->

    <section class="vehicles my-80">
        <div class="container">
            <div class="txts mb-48">
                <div class="descript">
                    <h4 class="mb-12 text-justify">CONDIÇÕES GERAIS DE ALUGUER</h4>
                    <p class="lh-base">“ CHANA RENT A CAR, LDA”, sociedade comercial por quotas, com sede na Rua Direita do Lar Patriota,
                        Província de Luanda, NIF 5000412244, matriculada na Conservatória do Registo Comercial de Luanda sob
                        o nº 2020.13 (“CHANA”) aluga ao Cliente, locatário identificado no contrato de Aluguer, um veículo
                        automóvel ligeiro de passageiros, mercadorias ou misto (o “Veículo”) pelo período de tempo especificado
                        no Contrato de Aluguer (o “Período de Aluguer”), acrescido de quaisquer acessórios que pretenda alugar e
                        que, no momento, a CHANA tenha disponíveis, os quais devem estar também especificados no Contrato de Aluguer.
                        A relação contratual do Cliente com a CHANA regula-se pelo Contrato de Aluguer (que assina no momento do
                        levantamento do Veículo) e pelos presentes termos e condições gerais (“T&Cs”).</p>
                </div>
            </div>
        </div>
    </section>

    <!--title start  -->
    <section class="files my-80">
        <div class="container">
            <div class="row  row-gap-4 align-items-end">
                <div class="col-lg-12 col-md-12 col-sm-12 my-40">
                    <form>
                        <div class="topic">
                            <p class="lh-base mb-2"><strong>1- A QUEM SE APLICAM OS PRESENTES T&Cs?</strong> Aplicam-se ao Cliente, que paga o aluguer e quaisquer custos associados
                                (e que pode ser o condutor) e a qualquer outro condutor que esteja expressa e completamente identificado no Contrato
                                de Aluguer (“Condutor Autorizado”). Todos estão obrigados pelos presentes T&Cs e são solidariamente responsáveis
                                pelo pagamento das quantias devidas no âmbito do Contrato de Aluguer.
                            </p>
                                <p class="lh-base mb-2"><strong>2- QUEM PODE ALUGAR E QUEM PODE CONDUZIR?</strong> Para alugar o Veículo o Cliente tem de ter os meios de
                                    pagamento aceites pela CHANA (dinheiro, e transferência bancária) e ser portador dos seguintes documentos: Particular – bilhete
                                    de identidade, carta de condução, número de contribuinte, fotografia pontual. Empresa – cópia do alvará, cópia do diário da
                                    república, credencial da empresa, bilhete(s) de identidade(s) do(s) responsável(is), número de contribuinte da empresa, bilhete
                                    de identidade do condutor autorizado, carta de condução do condutor autorizado, fotografia pontual. Todos os documentos terão
                                    que estar válidos, só podendo o Veículo ser conduzido pelo Cliente ou pelo Condutor Autorizado, portador dos mesmos documentos.
                                    A CHANA reserva-se o direito de solicitar a qualquer Cliente quaisquer outros documentos ou informações que entenda necessários
                                    para a celebração do Contrato de Aluguer.
                                </p>
                                <p class="lh-base mb-2"><strong>3- ONDE POSSO CONDUZIR O VEÍCULO?</strong>Pode conduzir o Veículo em Angola, só na Província de Luanda.
                                    Quando o Cliente pretender utilizar o Veículo fora da Província de Luanda, obriga-se a subscrever tal opção no Contrato de Aluguer,
                                    mediante o pagamento de uma quantia diária adicional que varia em função da província onde o Veículo vai ser utilizado, nos termos
                                    do Anexo I (“o Território”).
                                </p>
                                <p class="lh-base mb-2"><strong>4- QUE TIPO DE VEÍCULO PODE SER ALUGADO E PARA QUE FINALIDADE?</strong>Pode alugar um automóvel de
                                    passageiros ou misto, para transportar pessoas ou pessoas e mercadorias e de mercadorias (comerciais) para transporte de
                                    mercadorias, nos limites do respectivo Livrete. Nos automóveis de passageiros só podem ser transportadas bagagens pertencentes
                                    ao Cliente, condutor autorizado ou passageiros. Nos automóveis de mercadorias o transporte destas terá de cumprir o disposto nas
                                    normas aplicáveis ao transporte rodoviário de mercadorias. A CHANA não cobre as mercadorias transportadas em qualquer Veículo por
                                    si alugado e não pode ser responsabilizada por quaisquer bens ou objetos que o Cliente, Condutor Autorizado ou
                                    passageiros possam ter esquecido dentro do Veículo. Da mesma forma, a CHANA não é responsável por quaisquer lucros cessantes
                                    ou prejuízos de exploração ocorridos na vigência do aluguer.
                                </p>
                                <p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card-body">
                                            {{-- --}}
                                            <p class="lh-base mb-2"><strong>5- QUAIS SÃO AS OBRIGAÇÕES DO CLIENTE OU CONDUTOR AUTORIZADO PARA COM O VEÍCULO?</strong>
                                    Quando aluga um Veículo na CHANA, o Cliente e/ou o Condutor Autorizado devem cumprir as seguintes obrigações, sem prejuízo
                                    das indicadas noutras cláusulas dos T&Cs:
                                </p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> Não permitir que uma pessoa não autorizada conduza o Veículo. Não conduzir o Veículo fora do Território, salvo prévio consentimento escrito da CHANA e pagamento da quantia adicional. Cumprir o Código da Estrada, as leis e as regulamentações de trânsito aplicáveis e assegurar-se que estão familiarizados com as regras de trânsito e de condução locais.</p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> Assegurar-se que a bagagem ou bens
                                    transportados no Veículo estão seguros na medida em que não causem danos ao Veículo ou risco a qualquer ocupante do mesmo ou
                                    terceiros. Cuidar do Veículo com diligência e em qualquer caso, asseguraremse que o mesmo está trancado e protegido com os
                                    dispositivos antiroubo quando estiver estacionado ou sem vigilância.
                                </p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> Não conduzir sob a influência de álcool,
                                    drogas alucinogénias, narcóticos, barbitúricos, outras drogas ilegais ou qualquer substância (legal ou ilegal) susceptível de
                                    afectar ou prejudicar a capacidade de condução do Cliente e/ou a de qualquer Condutor Autorizado. Reabastecer o Veículo com o
                                    tipo de combustível apropriado. Se o Veículo for abastecido com o combustível errado, o Cliente será responsável por quaisquer
                                    custos incorridos com a deslocação do Veículo e/ou com a reparação dos danos ao mesmo causados. Não utilizar o Veículo, nem
                                    permitir que seja utilizado, para:
                                </p>
                                <p class="lh-base mb-2"><strong>a)</strong> Subaluguer, hipoteca, penhor, venda ou qualquer espécie de garantia, quer em relação ao Veículo ou qualquer das suas componentes, bem como ao Contrato de Aluguer, às chaves, aos documentos, às ferramentas, ou qualquer dos seus acessórios, ou transportar passageiros contra a lei, por conta de outrem ou contra pagamento, salvo se, expressamente autorizado, por escrito, pela CHANA ou transportar mercadoria inflamável ou perigosa, tóxica, produtos nocivos e/ou radioactivos ou que sejam ilegais, bem como transportar mercadoria contra a lei ou o Livrete do Veículo;</p>
                                <p class="lh-base mb-2"><strong>b)</strong> Provas desportivas, oficiais ou não;</p>
                                <p class="lh-base mb-2"><strong>C)</strong> Transportar animais vivos (excepto animais domésticos ou de estimação, com autorização escrita expressa da CHANA);</p>
                                <p class="lh-base mb-2"><strong>d)</strong> Dar aulas de condução ou “condução acompanhada”; </p>
                                <p class="lh-base mb-2"><strong>e)</strong> Para empurrar ou puxar outro veículo ou reboque, salvo se o Veículo estiver equipado com um dispositivo próprio;</p>
                                <p class="lh-base mb-2"><strong>f)</strong> Em estradas  de  cascalho  ou  em  estradas  não adequadas para veículos a motor ou cuja superfície ou condição envolva
                                    risco para os pneus ou para a parte inferior do Veículo, ou para o  próprio Veículo;
                                </p>
                                <p class="lh-base mb-2"><strong>g)</strong> Para praticar uma infração dolosa;</p>
                                <p class="lh-base mb-2"><strong>h)</strong>Para ser transportado a bordo de qualquer tipo de barco, navio, comboio, camião ou avião, salvo com o consentimento expresso escrito da CHANA;</p>
                                <p class="lh-base mb-2"><strong>i)</strong>Dentro de portos, aeroportos,  e/ou  aeródromos e/ou  locais análogos,  não  acessíveis
                                    ao  trânsito público, ou em refinarias e instalações de petróleo, sem  o  expresso  e  escrito  consentimento da CHANA.
                                    No caso de a CHANA autorizar o Cliente nos termos referidos, informáLo-á do seguro de danos próprios que é aplicável a estes
                                    casos e que varia de acordo com as circunstâncias. O Cliente é responsável perante a CHANA pelos prejuízos que resultem da
                                    violação de quaisquer das acima mencionadas obrigações, para além de deixar de estar coberto por qualquer seguro facultativo
                                    ou produtos de proteção complementares que tenha contratado, tornando-o totalmente responsável pelos danos. A CHANA reserva-se
                                    também o direito de exigir a imediata devolução do Veículo, nos termos da lei.
                                </p>
                                <p class="lh-base mb-2"><strong>6- QUAIS OS SERVIÇOS DE MOBILIDADE INCLUÍDOS?</strong> O valor básico do aluguer
                                    inclui os seguintes serviços padrão de mobilidade: substituição do veículo por outro veículo do mesmo grupo,
                                    em caso de avaria ou quaisquer problemas técnicos, que não sejam devidos a negligência do Cliente ou Condutor
                                    Autorizado, assistência técnica preventiva ao Veículo; direito a devolver o Veículo na estação onde o mesmo foi
                                    levantado; limpeza básica; seguro obrigatório de responsabilidade civil automóvel.</p>
                                <p class="lh-base mb-2"><strong>7- QUAIS OS PRODUTOS E SERVIÇOS DE MOBILIDADE NÃO INCLUÍDOS NOS SERVIÇOS PADRÃO?</strong>A CHANA propõe-lhe
                                    ainda os seguintes produtos e serviços de mobilidade adicionais: possibilidade de o Veículo ser entregue ao Cliente, no início
                                    do Contrato de Aluguer, fora das estações da CHANA, reservando-se a CHANA o direito de limitar e recusar a entrega de Veículos
                                    em determinadas zonas; direito a devolver o Veículo em estação da CHANA diferente daquela onde o mesmo foi levantado, mediante
                                    o pagamento de uma taxa de Akz 4.000,00; possibilidade de contratar um seguro contra danos próprios e/ou ocupantes, nos termos
                                    descritos no Anexo I; possibilidade de contratar, nas horas de funcionamento dos serviços da CHANA ou fora delas, um serviço
                                    com motorista, sujeito ao pagamento de uma taxa diária, conforme tarifa em vigor à data do aluguer do Veículo.</p>
                                <p class="lh-base mb-2"><strong>8- O QUE ESTÁ INCLUÍDO NO PREÇO QUE O CLIENTE PAGA? </strong> O preço que o Cliente vai pagar inclui o seguinte:</p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> O valor do aluguer diário do Veículo pelos dias de calendário
                                    contratados calculados por períodos de 24 horas (que inclui os serviços padrão de mobilidade acima referidos);</p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> O valor de quaisquer outros produtos ou serviços de mobilidade
                                    adicionais que o Cliente pretenda contratar; </p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> Os impostos aplicáveis (IC);</p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> Outros custos que estejam relacionados à pessoa do Cliente (ex: a
                                    idade, se for um condutor entre os 18 e os 25 anos). </p>
                                <p class="lh-base mb-2"><strong></strong>O Cliente autoriza expressamente a CHANA a debitar nas cauções ou
                                    franquias por si efectuadas qualquer montante não pago decorrente do contrato de aluguer.</p>
                                <p class="lh-base mb-2"><strong>9-QUE OUTROS VALORES PODE O CLIENTE TER QUE PAGAR?</strong> O Depósito-Caução. Adicionalmente ao preço do
                                    aluguer que pagou previamente no momento da reserva ou que irá pagar no momento do levantamento, a CHANA requer que lhe deixe uma caução que visa cobrir os custos de aluguer adicionais ou
                                    multas. O montante da caução depende da categoria do Veículo de aluguer. A caução será reembolsada ao Cliente no acto de devolução do
                                    Veículo, se não forem identificados pela CHANA custos de aluguer adicionais ou multas. <br>
                                    A caução será efetuada pelo Cliente ou pelo Condutor Autorizado no momento da reserva ou do levantamento do Veículo.
                                    A CHANA cobrará ao Cliente e ao Condutor Autorizado os custos causados por incidentes que possam ter ocorrido durante o Período
                                    de Aluguer e/ou pela forma como o Cliente ou o Condutor Autorizado utilizaram o Veículo. Tais custos incluem, sem limitar:
                                </p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> Custos administrativos pela gestão dos processos por
                                    contravenções, pedido de documentos extraviados pelo Cliente, etc., até ao montante de Akz 40.000,00 por processo. O Cliente
                                    fica ciente que tais custos administrativos são pagos para além das multas a que haja lugar e pelas quais o Cliente é total e
                                    exclusivamente responsável; Custos administrativos pela gestão do processo, em caso de danos, até ao montante de Akz 50.000,00;
                                </p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i> </strong> Custo da limpeza, no caso de o Veículo ser devolvido num estado
                                    inaceitável (para além do uso normal) e, ou de sujidade, até ao montante de Akz 60.000,00;</p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> Custo das chaves perdidas ou roubadas;</p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> “Danos” causados ao Veículo (qualquer dano material ou acto de
                                    vandalismo causado no Veículo) e/ou “Roubo do Veículo” (dano causado com a perda do Veículo em consequência de roubo ou
                                    tentativa de roubo ou furto do mesmo ou das suas componentes). A responsabilidade do Cliente pode ser limitada, nos termos e em
                                    conformidade com o tipo de protecção que tiver escolhido, conforme Anexo I;
                                </p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> Os seguintes custos específicos adicionais: (i) nos levantamentos
                                    ou devoluções nas estações situadas no aeroporto ou nas estações de comboio, se aplicável (ii) do retorno do Veículo para uma
                                    estação CHANA que não aquela em que procedeu ao levantamento) (iii) o prolongamento do aluguer do Cliente. </p>
                                <p class="lh-base mb-2"><strong>10- O QUE FAZER QUANDO LEVANTAR O VEÍCULO?</strong>
                                    Quando levantar o Veículo junto da CHANA, vai ser solicitado ao Cliente que assine, para além de outras, uma secção no Contrato de
                                    Aluguer que descreve o estado do Veículo naquele momento. Se o Cliente verificar qualquer defeito aparente ou dano que não
                                    esteja descrito no Contrato de Aluguer, deve assegurar-se que é feita essa menção no documento e que ambos, o Cliente e o representante
                                    da CHANA, assinam tal alteração. No caso de nada estar mencionado, considera-se que o Veículo foi entregue ao Cliente no
                                    estado referido no Contrato de Aluguer e serão cobrados por quaisquer novos danos que sejam verificados pelo Cliente e pelo
                                    representante da CHANA quando o Veículo for inspecionado por ambos no momento da sua devolução. </p>
                                <p class="lh-base mb-2"><strong>11- O QUE FAZER QUANDO DEVOLVER O VEÍCULO?</strong></p>
                                <p class="lh-base mb-2"><strong>a)</strong> Devolução durante o horário de funcionamento das
                                    estações CHANA e na presença do Cliente. O Cliente deve devolver o Veículo na estação CHANA na data e na hora indicadas
                                    no Contrato de Aluguer. O Período de Aluguer termina quando devolver o Veículo na estação CHANA e entregar a respetiva chave
                                    e documentos. No caso de devolver o Veículo antes da data mencionada no Contrato de Aluguer, não terá direito a qualquer reembolso.
                                    Quando devolver o Veículo à CHANA o Cliente deve inspeccioná-lo juntamente com o representante da CHANA e assinar o relatório de
                                    danos pós aluguer, entregando-lhe a CHANA um documento assinado no qual declara que o Veículo foi devolvido e aceite pela
                                    CHANA (“Declaração de devolução do Veículo”).
                                </p>
                                <p class="lh-base mb-2"><strong>b)</strong> Devolução Sem a sua presença e durante o horário de funcionamento das estações.
                                    No caso de não ser possível e/ou, o Cliente se recusar a inspeccionar o Veículo juntamente com o representante da CHANA, esta fica
                                    autorizada a inspecionar o Veículo sem a presença do Cliente e a registar a sua recusa ao contraditório, aceitando o Cliente que o
                                    relatório que atesta o estado do Veículo seja elaborado pelo representante da CHANA sem a sua presença. Após a inspecção ter
                                    sido efectuada e na ausência de qualquer Dano, a CHANA envia ao Cliente a Declaração de Devolução do Veículo. Em caso de Danos
                                    ver (cláusula 12).</p>
                                <p class="lh-base mb-2"><strong>c)</strong> Atraso na devolução do Veículo No caso de o Veículo não ser devolvido na data mencionada no
                                    Contrato de Aluguer e se no período de 24 horas não houver qualquer informação justificativa do atraso, para além do procedimento
                                    previsto na cláusula 20, a CHANA reserva-se no direito de considerar que o Cliente se apropriou ilegalmente do Veículo e reportará tal
                                    facto às autoridades locais competentes, podendo retirar ao Cliente o Veículo alugado no termo do contrato. Pode ainda iniciar
                                    imediatamente os procedimentos judiciais necessários para rescindir o contrato nos termos da lei, com fundamento em incumprimento das
                                    cláusulas contratuais e para reclamar a imediata restituição do Veículo. Em tais casos, a CHANA cobra ao Cliente o valor do aluguer por cada
                                    dia em que ficar com o Veículo para além da data do termo do aluguer, salvo se o Cliente demonstrar que a não restituição do
                                    Veículo não lhe é imputável, para além de reclamar do Cliente todos os danos e perdas sofridas, bem como as multas ou demais sanções
                                    que recaiam sobre o Veículo. O Cliente nestes casos deixa de beneficiar de quaisquer seguros facultativos ou produtos de proteção complementares que tenha contratado.</p>
                                <p class="lh-base mb-2"><strong>12- DANOS NO VEÍCULO</strong> No caso do Veículo não ser devolvido no estado em que foi entregue,
                                    o Cliente perde a caução e terá de pagar as quantias referente os danos. Caso os danos tenham sido causado por terceiro, e o mesmo
                                    tenha o processo de seguro acautelado , apôs o pagamento do sinistro o valor da caução é ressarciddo a favor do cliente. O Cliente,
                                    dependendo do tipo de dano e do tipo de protecção que tenha subscrito (cfr. Anexo I) pode ser ou não cobrado pelo custo da
                                    reparação. Em caso de abertura de um novo contrato o cliente é obrigado a pagar uma nova caução. Se haver conflito entre o cliente e o terceiro ,
                                    o cliente continua a ser o unico responsavel pelos danos. É cobrado uma taxa de entrada até 1.000.000,00 depedendo dos danos.
                                </p>
                                <p class="lh-base mb-2"><strong>a)</strong> Danos identificados no momento da devolução e na presença do Cliente;
                                    No caso de serem identificados Danos no âmbito da inspecção realizada na presença do Cliente e na do representante da CHANA
                                    aquando da devolução do Veículo e dos quais tomou conhecimento quando assinou a Declaração de Devolução do Veículo, a CHANA
                                    entregar-lhe-á uma avaliação com os custos da reparação que lhe poderão ser cobrados, cujo valor depende da natureza e da extensão
                                    dos Danos: “Pequenos Danos” (danos menores e não substanciais causados ao Veículo, sem afectar a sua devolução e a sua mobilidade
                                    nos termos do Código da Estrada, tais como e sem limitar: pequenos riscos ou mossas no para-brisas) serão avaliados por um perito e
                                    cobrados de acordo com o relatório do mesmo ou pelo custo orçamentado de uma oficina de reparações, a enviar ao Cliente num
                                    prazo de 15 dias a contar da recepção do Veículo pela CHANA nas suas instalações, juntamente com os custos administrativos de gestão de danos.
                                    Quaisquer outros danos não incluídos na lista acima referida e/ou
                                    outros danos mais graves (danos substanciais que impedem a devolução do Veículo e exigem a sua temporária imobilização para
                                    reparação, tais como e sem limitar: danos na carroçaria), também serão avaliados por um perito e cobrados de acordo com o relatório
                                    do mesmo ou pelo custo orçamentado de uma oficina de reparações, a enviar ao Cliente num prazo de 30 dias a contar da recepção do
                                    Veículo pela CHANA nas suas instalações juntamente com os custos administrativos de gestão de danos.
                                    O Cliente será responsável pelo custo diário do aluguer do Veículo, até (15) quinze dias após a devolução do Veículo, quando entregue o
                                    Veículo com danos que obriguem à sua imobilização, a pagar no momento da sua devolução. No caso de contestar os Danos e, ou a respectiva faturação, através da
                                    recusa em assinar a Declaração de Devolução do Veículo, a CHANA irá aplicar o procedimento a seguir descrito (12b).
                                </p>
                                <p class="lh-base mb-2"><strong>b)</strong> Danos identificados em caso de devolução sem a presença do Cliente;
                                    No caso de os Danos serem identificados no âmbito da inspeção ao Veículo feita pelo representante da CHANA sem a presença do
                                    Cliente, a CHANA enviar-Lhe-á os seguintes documentos:
                                </p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> Fotografias dos Danos;</p>
                                <p class="lh-base mb-2"><strong><i class="bi bi-check2-all" style="color: #041A71"></i></strong> Uma estimativa (orçamento) dos custos de reparação, que
                                    dependerão da natureza e da extensão dos Danos (v. supra 12 a) §2 e §3), dos custos de imobilização do Veículo (v. supra 12 a) §4) e dos
                                    custos administrativos pela gestão do processo de Danos. O Cliente pode contestar os Danos identificados e respetiva faturação no prazo
                                    de (3) Três dias úteis após o envio dos documentos, por email para <a class="text-primary" href="mailto:info@orgchana.com">info@orgchana.com</a> ou <a class="text-primary" href="mailto:rentacar@orgchana.com">rentacar@orgchana.com</a> ou por carta para
                                    Estrada Principal do Lar do Patriota, Município de Belas, Luanda. No caso de não contestar no referido prazo de (3) Três dias úteis, a
                                    CHANA reserva-se o direito de cobrar ao Cliente os referidos custos.
                                </p>
                                <p class="lh-base mb-2"><strong>13- O QUE DEVO FAZER QUANTO À MANUTENÇÃO DO VEÍCULO?</strong> Durante o aluguer o Cliente ou o Condutor Autorizado
                                    deve tomar todas as medidas de protecção necessárias para manter o Veículo nas mesmas condições em que lhe foi entregue e estar atento
                                    a qualquer sinal de aviso das luzes do painel do Veículo e tomar as medidas de protecção necessárias.
                                    O Veículo é fornecido ao Cliente com os pneus, em número e nas condições que cumprem os requisitos das leis de trânsito. No caso de
                                    algum deles sofrer danos, para além do uso e desgaste normal, de defeito latente ou de força maior, o Cliente deve substitui-lo, a
                                    expensas Suas, por um pneu do mesmo tamanho, tipo e marca. É proibida qualquer modificação ou intervenção mecânica ao Veículo
                                    sem a prévia autorização escrita da CHANA. No caso de violar esta norma, o Cliente ou o Condutor Autorizado terão de suportar os
                                    custos de repor o Veículo nas mesmas condições em que lhe foi entregue e será responsável perante a CHANA por quaisquer
                                    prejuízos que decorram da violação de qualquer das acima mencionadas obrigações de manutenção.
                                    A reparação dos danos devem ser feitas em oficinas em convenio com a CHANA. É expressamente proibido o cliente fazer a reparação do veiculo por
                                    conta propria, o encaminhamento do processo a oficina é de inteira responsabilidade da CHANA. </p>
                                <p class="lh-base mb-2"><strong>14- O QUE DEVO FAZER EM CASO DE ACIDENTE, AVARIA MECÂNICA OU ROUBO DO VEÍCULO?</strong>
                                    Em caso de avaria mecânica ou acidente, que o impeça de continuar a conduzir e/ou que o obrigue a parar para evitar o agravamento do
                                    dano, o Cliente obriga-se a ligar para o Call Center da CHANA nº <a class="text-primary" href="tel:+244991001400">991001400</a>; <a class="text-primary" href="tel:+244946320021">946320021</a> para que este disponibilize um serviço de assistência .
                                    Em caso de acidente o contrato é automaticamente fechado, o Cliente obriga-se a fazer intervir sempre as autoridades policiais, devendo
                                    comunicar tal facto à CHANA através do supra referido Call Center, imediatamente após o acidente .
                                    Em caso de avariao cliente deve contactar a CHANA num prazo nunca superior a (3) três horas, sob pena de poder ser
                                    responsabilizado pelo agravamento dos danos do Veículo. Em caso de roubo do Veículo, o Cliente obriga-se a ligar
                                    imediatamente para o Call Center da CHANA nº <a class="text-primary" href="tel:+244991001400">991001400</a>; <a class="text-primary" href="tel:+244946320021">946320021</a> e deve enviar à CHANA uma cópia da participação do
                                    mesmo às autoridades policiais no mais curto prazo possível nunca superior a (12 h) doze horas, juntamente com as chaves e os
                                    documentos do Veículo, no caso destes não terem sido roubados, para que a CHANA possa promover todas as diligências ao seu alcance
                                    conducentes a descoberta do Veículo e, se possível, dos autores do crime.</p>
                                <p class="lh-base mb-2"><strong></strong></p>
                                <p class="lh-base mb-2"><strong></strong></p>
                                <p class="lh-base mb-2"><strong></strong></p>
                                <p class="lh-base mb-2"><strong></strong></p>
                                        </div>
                                    </div>
                                <a class="text-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Ler mais
                                </a>
                            </p>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- title end -->
@endsection
