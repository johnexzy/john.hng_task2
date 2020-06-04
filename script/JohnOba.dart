
import 'dart:convert';

void main(List<String> args) {
  _getDay(){
  return jsonEncode({
    "output": "Hello world, this is Oba John with HNGi7 ID HNG-04363 and email obajohn75@gmail.com using PHP for stage 2 task",
    "name": "Oba John",
    "id": "HNG-04363",
    "email": "obajohn75@gmail.com",
    "language": "Dart"
    });
}
  print(_getDay());
}