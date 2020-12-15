const express = require('express');
const router = express.Router();
const nodemailer = require('nodemailer');


router.get('/', function(req, res, next) {
  res.render('index');
});
router.post('/send',(req, res) => {
  const output = `
    <p> Recebido pedido de contato</p>
    <h3> Detalhes</h3>
    <ul>
      <li>Nome:${req.body.nome}</li>
      <li>Email:${req.body.email}</li>
      <li>Mensagem:${req.body.mensagem}</li>  
    </ul>
  `;

async function main() {
    
    let transporter = nodemailer.createTransport({
      host: "smtp.gmail.com",
      port: 587,
      secure: false, 
      auth: {
        user: "loja.gianebaby@gmail.com", 
        pass: "giane210623"
      },
    });
  
    let info = await transporter.sendMail({
      from: '"Contato do Site GianeBaby" <loja.gianebaby@gmail.com>"',
      to: "loja.gianebaby@gmail.com", 
      subject: "Contato", 
      text: "Entrar em contato",
      html: output
    });
  
    console.log("Message sent: %s", info.messageId);
    console.log("Preview URL: %s", nodemailer.getTestMessageUrl(info));

    res.redirect('/')

  }
  
  main().catch(console.error);


});

module.exports = router;
