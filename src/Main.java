import java.util.Arrays;
import java.util.Scanner;

public class Main {
	public static void main(String[] args) {
		int size;
		int tong = 0;
		Scanner sc = new Scanner(System.in);
		System.out.print("Nhập size =");
		size = sc.nextInt();
		int[] array = new int[size];
		System.out.println();
		for (int i = 0; i < size; i++) {
			System.out.print("Nhap phan tu thu " + (i + 1) + "\n");
			System.out.print("array[" + i + "]=");
			array[i] = sc.nextInt();
			System.out.println();
			while (array[i] % 2 == 0) {
				tong += array[i];
				break;
			}
		}
		System.out.println("Tổng số chẵn trong dãy vừa nhập là: " + tong);
	}
}
