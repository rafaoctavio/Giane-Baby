var express = require('express');
var router = express.Router();


router.get('/', function(req, res, next) {
  res.render('index');

router.post('/send',(req, res) => {
  console.log(req.body)




  // const output = `
  //   <p> Recebido pedido de contato</p>
  //   <h3> Detalhes</h3>
  //   <ul>
  //     <li>Nome: ${req.body.nome}</li>
  //     <li>Email: </li>
  //     <li></li>
      
    
  //   </ul>
  
  
  // `;
});
});

module.exports = router;
