import 'package:flutter/material.dart';

main() => runApp(PerguntaApp());


class PerguntaApp extends StatelessWidget{

  var perguntaSelecionada = 0;

  @override
  Widget build(BuildContext context) {
    final perguntas =[
      'Qual é a sua cor favorita?',
      'Qual é a seu animal favorito?',
    ];

    void responder(){
      perguntaSelecionada++;
      print('Pergunta respondida!');
    }

    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
          title: Text('Perguntas'),
        ),
        body: Column(
          children: <Widget>[
            Text(perguntas[perguntaSelecionada]),
            RaisedButton(
              child: Text('Resposta 1'),
              onPressed: responder,
            ),
            RaisedButton(
              child: Text('Resposta 2'),
              onPressed: responder,
            ),
            RaisedButton(
              child: Text('Resposta 3'),
              onPressed: responder,
            ),
          ],
        ),
      ),
    );
  }
}