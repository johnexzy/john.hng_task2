
import 'dart:convert';

void main(List<String> args) {
  _returnDetails(){
  return jsonEncode({
    "output": "Hello world, this is Oba John with HNGi7 ID HNG-04363  using Dart for stage 2 task",
    "name": "Oba John",
    "id": "HNG-04363",
    "email": "obajohn75@gmail.com",
    "language": "Dart"
    });
}
  print(_returnDetails());
}