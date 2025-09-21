
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
                                <p class="lh-base mb-2"><strong></strong></p>
                                <p class="lh-base mb-2"><strong></strong></p>
                                <p class="lh-base mb-2"><strong></strong></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- title end -->
@endsection
