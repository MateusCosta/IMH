    <div class="sixteen column row">
        <div class="sixteen wide centered column">
            <form class="ui form form-pessoa" action="php/includes/recebe.php" method="post" name="pessoa" id="form_pessoa">
                <h4 class="ui dividing header">Informações básicas</h4>
                <div class="fields">

                    <div class="seven wide field">
                        <label for="pessoa[nome-completo]">Nome</label>
                        <input type="text" name="pessoa[nome-completo]" placeholder="Nome" id="pessoa[nome]">
                    </div>
                    <div class="six wide field">
                        <label for="pessoa[nome-social]">Sobrenome</label>
                        <input type="text" name="pessoa[nome-social]" placeholder="Sobrenome" id="pessoa[sobrenome]">
                    </div>
                    <div class="three wice field">
                        <label for="pessoa[data-nascimento]">Data de Nascimento</label>
                        <input type="text" name="pessoa[data-nascimento]" placeholder="dd/mm/aaaa" id="pessoa[data-nascimento]">
                    </div>
                </div>

                <div class="inline fields">
                    <div class=" field">
                        <label for="pessoa[genero]">Gênero</label>
                        <div class="ui radio checkbox">
                            <input type="radio" name="pessoa[genero]" tabindex="0"  checked="checked" class="hidden" value="Masculino">
                            <label>Masculino</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="pessoa[genero]" tabindex="0" class="hidden" value="Feminino">
                            <label>Feminino</label>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="pessoa[genero]" tabindex="0" class="hidden" value="Outro">
                            <label>Outro</label>
                        </div>
                    </div>

                    <div class="two wide field">

                    </div>

                    <div class="five wide field">
                        <label>Naturalidade</label>
                        <input type="text" name="pessoa[naturalidade]" placeholder="Naturalidade">
                    </div>

                </div>

                <div class="inline fields">
                    <div class=" field">
                        <label for="fruit">Estado Civil </label>
                        <div class="ui radio checkbox">
                            <input type="radio" name="pessoa[estado-civil]"  tabindex="0"   checked="checked" class="hidden" value="Solteiro">
                            <label>Solteiro</label>
                        </div>
                    </div>




                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="pessoa[estado-civil]" tabindex="0" class="hidden" value="Casado">
                            <label>Casado</label>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="pessoa[estado-civil]" tabindex="0" class="hidden" value="Viúvo">
                            <label>Viúvo</label>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="pessoa[estado-civil]" tabindex="0" class="hidden" value="Separado">
                            <label>Separado</label>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="pessoa[estado-civil]" tabindex="0" class="hidden" value="Divorciado">
                            <label>Divorciado</label>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="pessoa[estado-civil]" tabindex="0" class="hidden" value="União Estável">
                            <label>União Estável</label>
                        </div>
                    </div>



                </div>






                <h4 class="ui dividing header">Endereço</h4>

                <div class="fields">
                    <div class="five wide field">
                        <label>CEP</label>
                        <div class="ui action input">
                            <input type="text" name="pessoa[cep]" placeholder="CEP">
                            <button class="ui primary right labeled icon button pesquisa-cep">
                                <i class="search icon cep-icon"></i>
                                Pesquisar
                            </button>
                        </div>


                    </div>


                    <div class="six wide field">
                        <label>Rua</label>
                        <input type="text" name="pessoa[rua]" placeholder="Rua">
                    </div>

                    <div class="three wide field">
                        <label>Número</label>
                        <input type="text" name="pessoa[numero]" placeholder="N°">
                    </div>

                    <div class="three wide field">
                        <label>Bairro</label>
                        <input type="text" name="pessoa[bairro]" placeholder="Bairro">
                    </div>


                </div>

                <div class=" fields">


                    <div class="three wide field">
                        <label>Complemento</label>
                        <input type="text" name="pessoa[complemento]" placeholder="Complemento">
                    </div>



                    <div class="four wide field">
                        <label>Ponto de Referência</label>
                        <input type="text" name="pessoa[referencia]" placeholder="Ponto de Referência ">
                    </div>

                    <div class="five wide field">
                        <label>Cidade</label>
                        <input type="text" name="pessoa[cidade]" placeholder="Cidade">
                    </div>

                    <div class="four wide field">
                        <label>Estado</label>
                        <input type="text" name="pessoa[estado]" placeholder="Estado">
                    </div>

                </div>

                <h4 class="ui dividing header">Informações Adicionais</h4>

                <div class="fields">
                    <div class="three wide field">
                        <label>Telefone</label>
                        <input type="text" name="pessoa[telefone]" placeholder="Telefone">
                    </div>

                    <div class="three wide field">
                        <label>Número de CPF</label>
                        <input type="text" name="pessoa[cpf]" placeholder="Número de CPF">
                    </div>

                    <div class="three wide field">
                        <label>Número de RG</label>
                        <input type="text" name="pessoa[rg]" placeholder="Número de RG">
                    </div>
                    <div class="three wide field">
                        <label>Número de NIS</label>
                        <input type="text" name="pessoa[nis]" placeholder="Número de NIS">
                    </div>

                    <div class="four wide field">
                        <label>Número do Título</label>
                        <input type="text" name="pessoa[titulo]" placeholder="Número do Título">
                    </div>


                </div>





                <h4 class="ui dividing header">Informações Adicionais</h4>


                <div class="fields">
                    <div class="eight wide field">
                        <label>Nome da Mãe</label>
                        <input type="text" name="pessoa[nome-mae]" placeholder="Nome da Mãe">
                    </div>

                    <div class="eight wide field">
                        <label>Nome do Pai</label>
                        <input type="text" name="pessoa[nome-pai]" placeholder="Nome do Pai">
                    </div>





                </div>


                <div class="fields">


                    <div class="five wide field">
                        <label>Escolaridade</label>
                        <select class="ui fluid search dropdown" name="pessoa[escolaridade]">
                            <option value="">Selecione sua escolaridade</option>
                            <option value="1">Fundamental Completo</option>

                        </select>
                    </div>
                    <div class="eight wide field">
                        <label>Email</label>
                        <input type="text" name="pessoa[email]" placeholder="Email">

                    </div>
                    <div class="three wide  field">
                        <label>Número de Filhos</label>
                        <input type="text" name="pessoa[numero-filhos]" placeholder="Número de Filhos">
                    </div>




                </div>

                <hr/>
                <div class="fields">
                    <div class="three wide inline field">
                        <div class="ui toggle checkbox possui-beneficio">
                            <input type="checkbox" tabindex="0" class="hidden " name="pessoa[possui-beneficio]">
                            <label class="margin-topo">É beneficiário?</label>
                        </div>

                    </div>

                    <div class="six wide inline field">
                        <label>Nome do Benefício</label>
                        <input type="text" name="pessoa[beneficio]" placeholder="Nome do Benefício" class="beneficio" disabled="disabled" value="Não Possui">
                    </div>


                    <div class="four wide inline field">
                        <div class="ui toggle checkbox tem-restricao">
                            <input type="checkbox" tabindex="0" class="hidden" name="pessoa[possui-restricao-medica]" >
                            <label class="margin-topo">Possui Restrição Médica?</label>
                        </div>

                    </div>

                    <div class="six wide inline field">
                        <label class="margin-topo">Tipo da Restrição</label>
                        <input type="text" name="pessoa[restricao-medica]" placeholder="Tipo da Restrição" class="restricao" disabled="disabled" value="Não Possui">

                    </div>

                </div>
                <hr/>

                <div class="fields">
                    <div class="four wide inline field">
                        <div class="ui toggle checkbox tem-deficiencia">
                            <input type="checkbox" tabindex="0" class="hidden" name="pessoa[possui-deficiencia-fisica]">
                            <label class="margin-topo">Possui Deficiência Física?</label>
                        </div>

                    </div>

                    <div class="five wide inline field">
                        <label>Qual Deficiência?</label>
                        <input type="text" name="pessoa[deficiencia-fisica]" placeholder="Qual Deficiência?" class="deficiencia" disabled="disabled" value="Não Possui">
                    </div>
                    <div class="four wide field"></div>




                </div>



        </div>


    </div>



    <div class="sixteen column row">


        <div class="five wide centered column"><button id="btn_enviar" class="ui fluid primary animated button" type="button" name="pessoa[enviar]">
                <span class="visible content">Enviar Formulário</span>
                <span class="hidden content"><i class="right arrow icon"></i></span>
            </button>
        </div>

        </form>