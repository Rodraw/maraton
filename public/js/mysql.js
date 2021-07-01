const mysql = require('mysql')

const conection = mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'',
    database:'maraton'
})

conection.connect(( err ) =>{
    if(err) throw err
    console.log('La conexion funciona')
})

conection.query('SELECT * from users',(err,rows)=>{
    if(err) throw err
    console.log('Los datos de la tabla son estos:')
    console.log(rows)
    console.log('La cantidad de resultados es:')
    console.log(rows.length)
    const usuarioUno = rows[0]
    console.log(`El uiario se llama ${usuarioUno.email} y tiene el id ${usuarioUno.id}`)
    var correo = usuarioUno.email
    console.log(correo)
})

 conection.query('SELECT * from preguntas',(err,rows)=>{
    if(err) throw err
    const pregunta1 = rows[0]
    var texto1 = pregunta1.texto
    var respuesta1 = pregunta1.respuesta
    var opciones1 = pregunta1.opciones
    var preguntas1 = [
        {
                "texto": texto1,
                "respuesta":[respuesta1],
                "opciones":[
                opciones1
                    ]
                },
    ];
    console.log(preguntas1)

})

conection.end() 