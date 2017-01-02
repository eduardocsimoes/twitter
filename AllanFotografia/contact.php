<div class="modalcontact">
    <div class="modal_contact">
        <div class="modal-header">            
            <h2>Contato</h2>
        </div>            
        
        <div class="modal-side">                
            <div class="ms"><img src="<? echo INCLUDE_PATH; ?>/img/icone-telefone.png"><span>xx-xxxx-xxxx</span></div><br />
            <div class="ms"><img src="<? echo INCLUDE_PATH; ?>/img/icone-email.png"><span>allannovais@gmail.com</span></div><br />
            <div class="ms"><img src="<? echo INCLUDE_PATH; ?>/img/icone-facebook.png"><span>facebook.com/allannovais</span></div><br />
            <div class="ms"><img src="<? echo INCLUDE_PATH; ?>/img/icone-instagram.png"><span>instagram.com/allannovais</span></div><br />
        </div>

        <div class="modal-body">
            <form method="POST" name="enviarcontato" action="">
                <label class="label">
                    <input type="text" name="nome" class="modal-body-label" placeholder="Nome" />
                </label><br />
                <label class="label">
                    <input type="text" name="sobrenome" class="modal-body-label" placeholder="Sobrenome" />
                </label><br />
                <label class="label">
                    <input type="email" name="email" class="modal-body-label" placeholder="E-Mail" />
                </label><br />
                <label class="label">
                    <select class="modal-body-label">
                        <option value="0" selected="selected" disabled="disabled">Assunto</option>
                        <option value="servicos">Serviços</option>
                        <option value="duvidas">Dúvidas</option>
                        <option value="reclamacoes">Reclamações</option>
                        <option value="elogios">Elogios</option>
                        <option value="outros">Outros</option>
                    </select>
                </label><br />
                <label class="label">                    
                    <textarea name="mensagem" class="modal-body-label" rows="5" cols="40" wrap="virtual" placeholder="Mensagem" ></textarea>
                </label><br /> 
                <label class="label">
                    <input type="submit" name="submitcontato" class="modal-body-label button" value="Enviar"/>
                    <input type="reset" class="modal-body-label button" value="Limpar" />
                </label>    
            </form>
        </div>
    </div>
</div>