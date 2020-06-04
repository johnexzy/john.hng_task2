
import 'dart:convert';

void main(List<String> args) {
  _returnDetails(){
  return jsonEncode({
    "output": "Hello world, this is Ugwu Joshua with HNGi7 ID HNG-04463  using Dart for stage 2 task",
    "name": "Ugwu Joshua",
    "id": "HNG-04463",
    "email": "fsbuis@gmail.com",
    "language": "Dart"
    });
}
  print(_returnDetails());
}