require 'prime'

n=gets.to_i

result=0

n.times do
  x=gets.to_i
  if Prime.prime?(x)
    result +=1
  end
end
p result

