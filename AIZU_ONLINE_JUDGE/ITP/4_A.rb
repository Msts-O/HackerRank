a,b=gets.split(" ").map &:to_i

first=a/b
second=a%b
third=a/b.to_f
forth=sprintf("%.5f",third)

printf("%d %d %f\n", first,second,forth)
